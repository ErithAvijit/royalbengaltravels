<?php
class Admin_controller extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
		$this->load->model('Admin_model');
		
	}

public function index()
	{
		$this->load->view('adminlogin');
	}
	public function process()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		 // echo $username;
		 // echo $password;
		if($username=='admin' && $password=='123')
		{
			$data['username'] = $username;
			// $this->session->set_userdata(array('username'=>$username));
			$this->load->view('welcome', $data);
		}
		else{
			$data['error'] = 'Admin account is invalid';
			$this->load->view('adminlogin', $data);
		}
	}
	//redirect("Hello/dispdata1");

public function dispdata()
	{
	$result['data']=$this->Admin_model->displayrecords();
	$this->load->view('display_records',$result);
	}

	public function dispdata1()
	{
	$result['data']=$this->Admin_model->displayrecords1();
	$this->load->view('display_records1',$result);
	}
// --------------------end/display/view-------------


	public function deletedata()
	{
	$id=$this->input->get('id');
	$this->Hello_Model->deleterecords($id);
	redirect("Admin_controller/dispdata");
	}
	public function deletedata1()
	{
	$id=$this->input->get('id');
	$this->Hello_Model->deleterecords1($id);
	redirect("Admin_controller/dispdata1");
	}

	public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->Admin_model->displayrecordsById($id);

	$this->load->view('update_records',$result);

		if($this->input->post('update'))
		{
		$n=$this->input->post('book_id');
		$e=$this->input->post('reg_id');
		$m=$this->input->post('user');
		$o=$this->input->post('no_persons');
		$p=$this->input->post('price');
		$q=$this->input->post('location');
		$r=$this->input->post('total_price');

		$this->Admin_model->updaterecords($n,$e,$m,$o,$p,$q,$r,$id);
		redirect("Admin_controller/dispdata");
		}
	}

	public function updatedata1()
	{
	$id=$this->input->get('id');
	$result['data']=$this->Admin_model->displayrecordsById1($id);

	$this->load->view('update_records1',$result);

		if($this->input->post('update1'))
		{
		$a=$this->input->post('user');
		$b=$this->input->post('password');
		$c=$this->input->post('mail');
		$d=$this->input->post('mobile');


		$this->Admin_model->updaterecords1($a,$b,$c,$d,$id);
		redirect("Hello/dispdata1");
		}
	}
	public function dispdata2()
	{
	$result['data']=$this->Admin_model->displayrecords();
	$this->load->view('display_records',$result);
	}












}



?>