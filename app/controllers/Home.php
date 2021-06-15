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
}
?>