<?php 

class Home extends Controller {
    public function index() {

        if(isset($_SESSION['login'])) {
            if($_SESSION['login'] == 'user') {
                $data['logout'] = True;
            }
        }

        $data['title'] = 'Homepage';
        $this->view('templates/head', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function datacovid() {
        if(isset($_SESSION['login'])) {
            if($_SESSION['login'] == 'user') {
                $data['logout'] = True;
            }
        }

        $data['title'] = 'Data covid';

        $data['covid'] = $this->getDataCovid();

        $this->view('templates/head', $data);
        $this->view('home/datacovid', $data);
        $this->view('templates/footer');
    }

    public function getDataCovid() {
        $country = 'id';
        $api_address = 'https://covid19.mathdro.id/api/countries/' . $country;

        $data_json = file_get_contents($api_address);

        return json_decode($data_json);
    }

    public function berita() {
        if(isset($_SESSION['login'])) {
            if($_SESSION['login'] == 'user') {
                $data['logout'] = True;
            }
        }

        $data['title'] = "Berita";
        $data['berita'] = $this->getBerita();

        $this->view('templates/head', $data);
        $this->view('home/berita', $data);
        $this->view('templates/footer');
    }

    public function getBerita() {
        $country = "id";
        $category = "health";
        $apiKey = "05fd7b8573584b4f83fadd22cfbdd950";

        $api_address = "https://newsapi.org/v2/top-headlines?country=" . $country . "&category=" . $category . "&apiKey=" . $apiKey;

        $data_json = file_get_contents($api_address);

        return json_decode($data_json);
    }

    public function tentang() {
        if(isset($_SESSION['login'])) {
            if($_SESSION['login'] == 'user') {
                $data['logout'] = True;
            }
        }

        $data['title'] = 'Tentang';

        $this->view('templates/head', $data);
        $this->view('home/tentang', $data);
        $this->view('templates/footer');
    }

    public function user() {
        if(!isset($_SESSION['login'])) {
            header("Location:" . BASEURL . 'public/home');
            exit;
        }

        if(isset($_SESSION['login'])) {
            if($_SESSION['login'] == 'user') {
                $data['logout'] = True;
            }
        }

        if ($this->updateUserValidation()) {    
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . 'public/home/user');
            exit;
        }   
        else if (isset($_POST['update'])){
            $data['error'] = True;
        }

        $data['title'] = 'Profil Pengguna';

        $data['user'] = $this->getUser();

        $this->view('templates/head', $data);
        $this->view('home/user/index', $data);
        $this->view('templates/footer');
    }

    public function getUser() {
        $data = $this->model('User_model');

        return $data->getDataUserbyID($_SESSION['id']);
    }

    public function updateUserValidation() {
        if (isset($_POST['update'])) {
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
                    $data->updateDataUser($username, $usia, $provinsi, $password, $picture[0], $picture[1], $picture[2], $_SESSION['id']);

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
            $user = $this->getUser();
            $name = $user['nama_foto'];
            $type = $user['tipe_foto'];
            $content = $user['foto_profil'];
        }
        else {
            $name = $data['name'];
            $type = $data['type'];
            $content = file_get_contents($data['tmp_name']);
        }

        return [$name, $type, $content];
    }

    public function getubah() {
        echo json_encode($this->model('User_model')->getDataUserbyID($_POST['id']));
    }

}
?>