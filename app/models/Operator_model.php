<?php
class Operator_model {
    private $table = 'operator';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getDataOperator($username, $password) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE username=:username AND password =:password;");
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        
        return $this->db->singleSet(); 
    }

    public function getDataOperatorbyID($id) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id;");
        $this->db->bind('id', $id);
        
        return $this->db->singleSet(); 
    }
}
?>