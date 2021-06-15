<?php

session_start();

class Admin extends Controller {
    public function index() {
        if(!isset($_SESSION['login'])) {
            header("Location:" . BASEURL . 'public/home');
            exit;
        }
        else {
            if($_SESSION['login'] != 'admin') {
                header("Location:" . BASEURL . 'public/home');
                exit;
            }
        }

        $data['title'] = 'Halaman admin';

        $this->view('templates/head', $data);
        $this->view('admin/index');
        $this->view('templates/footer');
    }
}

?>