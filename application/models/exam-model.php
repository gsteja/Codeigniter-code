
<?php 

class Exam_model extends CI_Model {
	
function form($email,$unique)
	{
			
				
			$insert = array('email'=>$email, '$unique'=>$unique);
		
			$data = $this->db->insert('my_hobbies',$insert);
			if($data)
			{
				return "valid";
			}
			else
			{
				return "invalid";
			}
			
	}
	function retrive()
	{
		$result=$this->db->get('my_hobbies');
		return $result->result();
	}
}
