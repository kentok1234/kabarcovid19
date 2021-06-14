<?php

class PageNotFound extends Controller {
    public function index() {
        $data['title'] = 'Halaman tidak ditemukan';

        $this->view('templates/head', $data);
        $this->view('pagenotfound/index');
        $this->view('templates/footer');
    }
}

?>