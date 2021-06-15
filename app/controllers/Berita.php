<?php

class Berita extends Controller {
    public function index() {

        $data['title'] = "Berita";
        $data['berita'] = $this->getBerita();

        $this->view('templates/head', $data);
        $this->view('berita/index', $data);
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
}

?>