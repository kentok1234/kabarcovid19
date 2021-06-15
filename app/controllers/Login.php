<?php

session_start();

class Login extends Controller {
    public function index() {
        if(isset($_COOKIE['USID']) AND isset($_COOKIE['KEY']) AND isset($_COOKIE['ROLE'])) {
            $id = $_COOKIE['USID'];
            $key = $_COOKIE['KEY'];
            $role = $_COOKIE['ROLE'];

            if($role == 'admin') {
                $data = $this->model('Operator_model');
                $result = $data->getDataOperatorbyID($id);

                if ($key == hash('md5', $result['username'])) {
                    $_SESSION['login'] = 'admin';
                }
            }
            else {
                $data = $this->model('User_model');
                $result = $data->getDataUserbyID($id);

                if ($key == hash('md5', $result['username'])) {
                    $_SESSION['login'] = 'user';
                }
            }

        }

        
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

            if (!is_null($loginvalidation)) {
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
            $result = [$data->getDataUser($username, $password), 'user'];

            if($result[0]) {
                if(isset($_POST['remember'])) {
                    setcookie('USID', $result[0]['userid'], time()+60*60);
                    setcookie('KEY', hash('md5', $result[0]['username']), time()+60*60);
                    setcookie('ROLE', 'user', time()+60*60);
                }
    
                return $result;
            }
        }

        if($result[0]) {
            if(isset($_POST['remember'])) {
                setcookie('USID', $result[0]['id'], time()+60*60);
                setcookie('KEY', hash('md5', $result[0]['username']), time()+60*60);
                setcookie('ROLE', 'admin', time()+60*60);
            }
    
            return $result;
        }

    }

    public function validate_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

?>