
<?php
class Admin_model extends CI_Model
{
	// function saverecords($name,$email,$mobile)
	// {
	// $query="insert into bookdata values('','$book_id',$reg_id','$user','$no_persons','$price','$location','$total_price')";
	// $this->db->query($query);
	// }
// --------------------------display---------------
	function displayrecords()
	{
	$query=$this->db->query("select * from booking");
	return $query->result();
	}

	function displayrecords1()
	{
	$query=$this->db->query("select * from register");
	return $query->result();
	}
// ...............end/display-----------------------
	function deleterecords($id)
	{
		$this->db->query("DELETE from booking where book_id='$id'");
	}

	function deleterecords1($id)
	{
		$this->db->query("DELETE FROM `register` WHERE reg_id='$id'");
	}

	function displayrecordsById($id)
	{
	$query=$this->db->query("SELECT * FROM booking where book_id = '$id'");
	return $query->result();
	}

	function displayrecordsById1($id)
	{
	$query=$this->db->query("SELECT * FROM register where reg_id = '$id'");
	return $query->result();
	}

	function updaterecords($n,$e,$m,$o,$p,$q,$r,$id)
	{

			$query = $this->db->query("UPDATE `booking` SET `book_id`='$n',`reg_id`='$e',`user`='$m',`no_persons`='$o',`price`='$p',`location`='$q',`total_price`='$r' WHERE book_id = '$id'");

	}

	function updaterecords1($a,$b,$c,$d,$id)
	{

			$query = $this->db->query("UPDATE `register` SET `user`='$a',`password`='$b',`mail`='$c',`mobile`='$d' WHERE reg_id = '$id'");

	}
	// function displayrecords2()
	// {
	// $query=$this->db->query("select * from booking");
	// return $query->result();
	// }
}
?>
