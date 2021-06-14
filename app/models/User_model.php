<?php

class User_model {
    private $table = 'users';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getDataUser($username, $password) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username AND password=:password;');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->singleSet();
    }

    public function setDataUser($username, $password, $picture="") {
        $this->db->query("INSERT INTO " . $this->table . " VALUES('', :username, :password, :foto_profil);");
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('foto_profil', $picture);
        $this->db->execute();
    }
}

?>