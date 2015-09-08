<?php
  
  require_once('db.php');

  class Job {
    public $id;
    public $name;

    public function __construct($id, $name){
      this->$id = $id;
      this->$name = $name; 
    }
  }

  class Jobs{
    private $db; 

    public function __construct(){
<<<<<<< HEAD
      $this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
=======
      $this->db = new mysqli('daedex.com', 'stauguu1_admin', 'Quips123', 'stauguu1_quips');
>>>>>>> 32951c9287b391a47cd09985c75da1ede33609a8
      $this->db->autocommit(FALSE); 
    }

    public function __destruct(){
      $this->db->close(); 
    }

    private function getID($name){
      $stmt = $this->db->prepare("SELECT * FROM jobs WHERE job_name = ?"); 
      $stmt->bind_param('s', $name); 
      $stmt->execute();
      $stmt->store_result(); 
      $stmt->bind_result($id); 
      return $id;
    }

    public function Create($name){
      $stmt = $this->db->prepare("INSERT INTO jobs (name) VALUES (?)");
      $stmt->bind_param('s', $name);
      $stmt->execute();
      $id = $this->db->insert_id;
      $this->db->commit();
      $stmt->close();

      return $id;
    }
<<<<<<< HEAD

    public function Read($id){
      $stmt = $this->db->prepare("SELECT id, name FROM jobs WHERE id = ?");
      $stmt->bind_param('i', $id);
      $stmt->execute();
      $stmt->bind_result($id, $name);

      $jobs = []
      while($stmt->fetch()) {
        $jobs[] = new Job($id, $name);
      }

      return $jobs; 
    }

    public function Read_by_User($user_id){
      $stmt = $this->db->prepare("SELECT id, name FROM jobs WHERE user_id = ?");
=======
    
    public function readAll($user_id){
      $stmt = $this->db->prepare("SELECT job_id, job_name FROM jobs WHERE user_id = ?");
>>>>>>> 32951c9287b391a47cd09985c75da1ede33609a8
      $stmt->bind_param('i', $user_id); 
      $stmt->execute();
      $stmt->bind_result($id, $name);

      $jobs = [];
      while($stmt->fetch()){
        $jobs[] = new Job($id, $name);
      }

      return $jobs; 
    }

    public function Update($name, $id){
      $stmt = $this->db->prepare("UPDATE jobs SET name = ? WHERE id = ?"); 
      $stmt->bind_param('si', $name, $id); 
      $stmt->execute(); 
      $this->db->commit(); 
      $stmt->close(); 
    }

    public function Delete($name, $id){
      $stmt = $this->db->prepare("DELETE FROM jobs WHERE job_name = ? AND job_id = ?");
      $stmt->bind_param('si', $name, $id); 
      $stmt->execute();
      $this->db->commit();
      $stmt->close(); 
    }
  }