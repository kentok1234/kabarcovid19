<?php

class User_model {
    private $table = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getDataUser($username, $password) {
        $this->db->query('SELECT username, password FROM ' . $this->table . ' WHERE username=:username AND password=:password;');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->singleSet();
    }
}

?>