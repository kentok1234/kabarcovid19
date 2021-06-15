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

        $this->view('templates/head');
        $this->view('admin/index');
        $this->view('templates/footer');
    }
}

?>