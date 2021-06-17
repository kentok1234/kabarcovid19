<?php 

class User extends Controller {
    public function index() {
        $data['title'] = 'Profil Pengguna';

        $this->view('templates/head');
        $this->view('user/index');
        $this->view('templates/footer');
    }
}

?>