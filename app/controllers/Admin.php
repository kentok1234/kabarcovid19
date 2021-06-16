<?php

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

        $data['admin'] = $this->getAdmin();
        $data['user'] = $this->getUser();

        $this->view('templates/head', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }

    public function getAdmin() {
        $data = $this->model('Operator_model');

        $result = $data->getDataOperatorbyID($_SESSION['id']);

        return $result;
    }

    public function getUser() {
        $data = $this->model('User_model');

        return $data->getAllDataUser();
    }

    public function deleteDataUser($id) {
        $this->model('User_model')->deleteDataUser($id);
        Flasher::setFlash('berhasil', 'dihapus', 'danger');
        header('Location:' . BASEURL . 'public/admin');
        exit;
    }

}

?>