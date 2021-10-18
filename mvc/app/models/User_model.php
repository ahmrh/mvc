<?php 

class User_model {
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function count()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ');
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function search($username)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username');
        $this->db->bind('username', $username);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function join($data)
    {
        if($this->search($data['username']) > 0) return 0;

        $this->db->query('INSERT INTO ' . $this->table . ' (username) VALUES (:username)');
        $this->db->bind('username', $data['username']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

}