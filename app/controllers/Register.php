<?php

class Register extends Controller {
    public function index() {

        $data['title'] = "Daftar";
        $data['error'] = False;
        
        if ($this->register_validation()) {
            header('Location:http://localhost/latihan/kabarcovid19/public');
            exit;
        }
        else if (isset($_POST['register'])){
            $data['error'] = True;
        }

        $this->view('templates/head', $data);
        $this->view('register/index', $data);
        $this->view('templates/footer');
    }

    public function register_validation() {
        if (isset($_POST['register'])) {
            $username = $this->validate_data($_POST['username']);
            $password = $this->validate_data($_POST['password']);
            $konfirm_password = $this->validate_data($_POST['konfirmasiPassword']);
            $picture = $_POST['fotoProfil'];
            
            if(empty($username) OR empty($password) OR empty($konfirm_password)) {
                return False;
            }
            else {
                if ($password == $konfirm_password) {
                    $data = $this->model('User_model');
                    $data->setDataUser($username, $password, $picture);
                    return True;
                }
                
                return False;
            }
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