<?php

class Register extends Controller {
    public function index() {

        $data['title'] = "Daftar";
        $data['error'] = False;
        
        if ($this->register_validation()) {
            // header('Location:http://localhost/latihan/kabarcovid19/public');
            // exit;
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
            $usia = $this->validate_data($_POST['usia']);
            $provinsi = $this->validate_data($_POST['asalprovinsi']);
            $konfirm_password = $this->validate_data($_POST['konfirmasiPassword']);
            $picture = $this->getInfoFotoProfile($_FILES['fotoProfil']);
            
            if(empty($username) OR empty($password) OR empty($konfirm_password) OR empty($usia) OR empty($provinsi)) {
                return False;
            }
            else {
                if ($password == $konfirm_password) {
                    $data = $this->model('User_model');
                    $data->setDataUser($username, $usia, $provinsi, $password, $picture[0], $picture[1], $picture[2]);
                    // var_dump($picture);
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

    public function getInfoFotoProfile($data) {
        if($data['error']) {
            $name = 'userdefault.png';
            $type = 'image/png';
            $content = file_get_contents(BASEURL . 'public/img/' . $name);
        }
        else {
            $name = $data['name'];
            $type = $data['type'];
            $content = file_get_contents($data['tmp_name']);
        }

        return [$name, $type, $content];
    }
}

?>