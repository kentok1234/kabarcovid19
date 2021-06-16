<?php

class User_model {
    private $table = 'users';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllDataUser() {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getDataUser($username, $password) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username AND password=:password;');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->singleSet();
    }

    public function getDataUserbyID($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE userid=:id;');
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function setDataUser($username, $usia, $provinsi, $password, $filename, $typename, $data) {
        $this->db->query("INSERT INTO " . $this->table . " VALUES('', :username, :usia, :provinsi, :password, :filename, :typename, :data);");
        $this->db->bind('username', $username);
        $this->db->bind('usia', $usia);
        $this->db->bind('provinsi', $provinsi);
        $this->db->bind('password', $password);
        $this->db->bind('filename', $filename);
        $this->db->bind('typename', $typename);
        $this->db->bind('data', $data);
        $this->db->execute();
    }

    public function deleteDataUser($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE userid=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
    }
}

?>