<?php

session_start();

class Logout extends Controller {
    public function index() {
        session_unset();
        session_destroy();
        setcookie('USID', '', time() - 3600);
        setcookie('KEY', '', time() - 3600);
        setcookie('ROLE', '', time() - 3600);
        header('Location:' .  BASEURL . 'public/home');
    }
}

?>