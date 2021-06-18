<?php

class Feedback_model {
    private $table = 'feedback';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getDataFeedback() {
        $this->db->query('SELECT * FROM ' . $this->table . ' INNER JOIN users ON feedback.userid = users.userid; ');

        return $this->db->resultSet();
    }

    public function setDataFeedback($id, $pesan) {
        $this->db->query('INSERT INTO ' . $this->table . ' VALUES("", :id, :pesan);');
        $this->db->bind('id', $id);
        $this->db->bind('pesan', $pesan);
        $this->db->execute();
    }

    public function deleteDataFeedback($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE userid=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
    }
}

?>