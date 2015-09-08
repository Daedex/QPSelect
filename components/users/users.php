<?php
require_once('db.php'); 

class User{
	public $first_name;
	public $last_name;
	public $email;
	public $user_name;
	public $password;
	public $user_id;

	public function __construct($first_name, $last_name, $email, $user_name, $password, $user_id){
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->user_name = $user_name;
		$this->password = $password;
		$this->user_id = $user_id;
	}
}

class Users{
	private $db;

	public function __construct(){
		$this->db = new mysqli((DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$this->db->autocmmit(FALSE);
	}

	public function __destruct(){
		$this->db->close();
	}

	public function Create($first_name, $last_name, $email, $user_name, $password, $user_id){
      $stmt = $this->db->prepare("INSERT INTO users (first_name, last_name, email, user_name, password, user_id) VALUES (?, ?, ?, ?, ?, ?)");
      $stmt->bind_param('sssssi', $first_name, $last_name, $email, $user_name, $password, $user_id);
      $stmt->execute();
      $id = $this->db->insert_id;
      $this->db->commit();
      $stmt->close();
      
      return $id;
    }

	public function Read($user_id){
    $stmt = $this->db->prepare("SELECT first_name, last_name, email, user_name, password, user_id FROM users WHERE user_id = ?");
      $stmt->bind_param('i', $user_id); 
      $stmt->execute();
      $stmt->bind_result($first_name, $last_name, $email, $user_name, $password, $user_id);
      
      $users = [];
      while($stmt->fetch()){
        $users[] = new User($first_name, $last_name, $email, $user_name, $password, $user_id);
      }
      return $users; 
	}

	public function Update($first_name, $last_name, $email, $user_name, $password, $user_id){
      $stmt = $this->db->prepare("UPDATE users SET first_name = ?, last_name = ?, email = ?, user_name = ?, password = ? WHERE user_id = ?"); 
      $stmt->bind_param('sssssi', $first_name, $last_name, $email, $user_name, $password, $user_id); 
      $stmt->execute(); 
      $this->db->commit(); 
      $stmt->close(); 
	}

	public function Delete($name, $id){
	  $stmt = $this->db->prepare("DELETE FROM users WHERE user_name = ? AND user_id = ?");
      $stmt->bind_param('si', $name, $id); 
      $stmt->execute();
      $this->db->commit();
      $stmt->close(); 
    }
}

?>