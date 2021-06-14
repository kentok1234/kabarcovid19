<?php

class Login extends Controller {
    public function index() {
        
        $data['title'] = "Login";
        $data['error'] = False;
        $loginvalid = $this->login_validation();

        if ($loginvalid) {
            header('Location:http://localhost/latihan/kabarcovid19/public/home');
            exit;
        }
        else if (isset($_POST['login'])) {
            $data['error'] = True;
        }

        $this->view('templates/head', $data);
        $this->view("login/index", $data);
        $this->view('templates/footer');
    }

    public function login_validation() {
        $data = $this->model('Operator_model');

        if (isset($_POST['login'])) {
            $username = $this->validate_data($_POST["username"]);
            $password = $this->validate_data($_POST["password"]);

            $result = $data->getDataOperator($username, $password);
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