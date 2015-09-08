<?php
<?php
  
  require_once('db.php');

  class Selection {
   public $unit_tag;
   public $air_vol;
   public $total_static_press;
   public $voltage;
   public $unit_height;
   public $unit_weight;
   public $job_id;

    public function __construct($unit_tag, $air_vol, $total_static_press, $voltage, $unit_height, $unit_weight, $job_id){
      this->unit_tag = $unit_tag;
      this->air_vol = $air_vol;
      this->total_static_press = $total_static_press;
      this->voltage = $voltage;
      this->unit_height = $unit_height;
      this->unit_weight = $unit_weight;
      this->job_id = $job_id;
    }
  }

  class Selections{
    private $db; 

    public function __construct(){
      $this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
      $this->db->autocommit(FALSE); 
    }

    public function __destruct(){
      $this->db->close(); 
    }

    public function Create($unit_tag, $air_vol, $total_static_press, $voltage, $unit_height, $unit_weight, $job_id){
    $stmt = $this->db->prepare("INSERT INTO selections (unit_tag, air_vol, total_static_press, voltage, unit_height, unit_weight, job_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('iiiiiii', $unit_tag, $air_vol, $total_static_press, $voltage, $unit_height, $unit_weight, $job_id);
    $stmt->execute();
    $id = $this->db->insert_id;
    $this->db->commit();
    $stmt->close();
    
    return $id;
    }

    public function Read($job_id){
    $stmt = $this->db->prepare("SELECT unit_tag, air_vol, total_static_press, voltage, unit_height, unit_weight, job_id FROM selections WHERE job_id = ?");
    $stmt->bind_param('i', $job_id);
    $stmt->execute();
    $stmt->bind_result($unit_tag, $air_vol, $total_static_press, $voltage, $unit_height, $unit_weight, $job_id);
    
    $slections = [];
    while($stmt->fetch()) {
      $selections = new Selection($unit_tag, $air_vol, $total_static_press, $voltage, $unit_height, $unit_weight, $job_id);
      return $selections;
    }

    public function Update($unit_tag, $air_vol, $total_static_press, $voltage, $unit_height, $unit_weight, $job_id){
      $stmt = $this->db->prepare("UPDATE selections SET unit_tag = ?, air_vol = ?, total_static_press = ?, voltage = ?, unit_height = ?, unit_weight = ? WHERE job_id = ?"); 
      $stmt->bind_param('iiiiiii', $unit_tag, $air_vol, $total_static_press, $voltage, $unit_height, $unit_weight, $job_id); 
      $stmt->execute(); 
      $this->db->commit(); 
      $stmt->close(); 
    }

    public function Delete($unit_tag, $job_id){
      $stmt = $this->db->prepare("DELETE FROM selections WHERE unit_tag = ? AND job_id = ?");
      $stmt->bind_param('ii', $unit_tag, $job_id); 
      $stmt->execute();
      $this->db->commit();
      $stmt->close(); 
    }
  }
?>