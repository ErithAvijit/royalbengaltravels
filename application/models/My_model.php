<?php
class My_model extends CI_Model
{
	function savereg($n,$p,$e,$m)
	{
		if($this->db->query("INSERT INTO `register`(`reg_id`, `user`, `password`, `mail`, `mobile`) VALUES ('','$n','$p','$e','$m')"))
		{
			return TRUE;
		}
		else
			return FALSE;
	}
	function checklogin($email,$password)
	{
		$query=$this->db->query("SELECT  * FROM `register` WHERE mail='$email' AND password='$password'");
		if ($query->num_rows()) 
		{
			return TRUE;
			
		}
		else
		{
			return FALSE;
		}
	}
	function displaybooking($email,$pass)
	{
		$query=$this->db->query("SELECT  * FROM `register` WHERE mail='$email' AND password='$pass'");
		return $query->result();
	}
	// function sendlogin($email,$password)
	// {
	// 	$query=$this->db->query("SELECT  * FROM `register` WHERE mail='$email' AND password='$password'");
	// 		return $query->result();
	// }

function userbook($reg_id,$to,$u,$l,$p,$per,$total)
{
	if ($this->db->query("INSERT INTO `booking`(`reg_id`,`book_id`,`email`,`user`, `no_persons`, `price`, `location`, `total_price`) VALUES ('$reg_id','','$to','$u','$per','$p','$l','$total')"))
		return TRUE;
	else
		return FALSE;	
		
}

}



?>