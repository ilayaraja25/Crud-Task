<?php
class College extends CI_Controller{
	public function details(){
		$this->load->view('College_Staff_details');
}
public function update(){
extract($_POST);
$Name=$fname;
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
	$result=$this->Details->updateData($data,$Name);
	if($result){
		$this->fetchData();
	}
 }
       public function delete($Name){
	 
	  $this->load->model('Details');
	 $result=$this->Details->deleteData($Name);
        if(isset($result)){
            $this->fetchdata();
	   }
	   }
      public function send_Value($Name)
	{
         $this->load->model('Details');
		 $result['data']=$this->Details->editData($Name);
		 $this->load->view('display-record',$result);
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
	
   

}
    public function fetchData(){
	    $this->load->model('Details');
      $result['table']= $this->Details->getData();
	  $this->load->view('display-record',$result);
	}
}
?>