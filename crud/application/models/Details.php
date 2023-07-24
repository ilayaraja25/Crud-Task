<?php
class Details extends CI_Model{
	
	public function updateData($data,$Name){
	$this->load->database();
	$this->db->where('Name',$Name);
	 return $this->db->update('staff',$data);
	}
	public function editData($Name){
		 $this->load->database();
		$this->db->where('Name',$Name);
	   return $this->db->get('staff')->result();
	}
	public function insertData($data){
		Print_r($data);
		$this->load->database();
		$result=$this->db->insert('staff',$data);
		echo $result;
		//redirect(base_url('College/details/'));
	}
	
	   public function getData(){
            $this->load->database();
		return $this->db->get('staff')->result();
		
	   }
	   public function deleteData($Name){
		   $this->load->database();
	   $this->db->where('Name',$Name);
	   return $this->db->delete('staff');
	   }
	
	
	
	 
        
	
}
?>