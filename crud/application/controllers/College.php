<?php
class College extends CI_Controller{
	public function details(){
		$this->load->view('College_Staff_details');
}
   public function showData(){
      extract($_POST);
      $data=[
            'Name'=>$fname,
            'Date_of_joining'=>$date,
            'Address'=>$Address,
            'Department'=>$Department,
            'Phone_Number'=>$number,
            'Gender'=>$gender,
            'Blood_group'=>$blood
   ];
       $this->load->model('Details');
       $this->Details->insertData($data);
	
   

}}
?>