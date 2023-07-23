<?php
class Details extends CI_Model{
	public function insertData($data){
		Print_r($data);
		$this->load->database();
		$result=$this->db->insert('staff',$data);
		echo $result;
		
	}
	
	
	
	
	
	
	
}
?>