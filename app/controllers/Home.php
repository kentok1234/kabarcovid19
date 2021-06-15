<?php 

session_start();

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

}
?>