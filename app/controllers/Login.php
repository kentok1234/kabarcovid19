<?php

session_start();

class Login extends Controller {
    public function index() {
        
        if(isset($_SESSION['login'])) {
            if($_SESSION['login'] == 'admin') {
                header('Location:'. BASEURL .'public/admin');
                exit;
            }
            else {
                header('Location:'. BASEURL .'public/home');
                exit;
            }
        }

        $data['title'] = "Login";
        $data['error'] = False;

        if (isset($_POST['login'])) {
            $loginvalidation = $this->login_validation();

            if ($loginvalidation[0]) {
                if($loginvalidation[1] == 'admin') {
                    $_SESSION['login'] = 'admin';
                    header('Location:'. BASEURL .'public/admin');
                    exit;
                }
                else if ($loginvalidation[1] == 'user'){
                    $_SESSION['login'] = 'user';
                    header('Location:'. BASEURL .'public/home');
                    exit;
                }
            }
            else {
                $data['error'] = True;
            }
        }

        $this->view('templates/head', $data);
        $this->view("login/index", $data);
        $this->view('templates/footer');
    }

    public function login_validation() {
        $data = $this->model('Operator_model');

        $username = $this->validate_data($_POST["username"]);
        $password = $this->validate_data($_POST["password"]);

        $result = [$data->getDataOperator($username, $password), 'admin'];
        
        if(!$result[0]) {
            $data = $this->model('User_model');

            return [$data->getDataUser($username, $password), 'user'];
        }

        return $result;

    }

    public function validate_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

?>