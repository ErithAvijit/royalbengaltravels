<?php
class My_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('My_model');
		
	}
	public function login()
	{
		$this->load->view('booking1');
		if ($this->input->post('submit')) {
			$_SESSION['e']=$this->input->post('email');
			$_SESSION['p']=$this->input->post('password');
			$this->load->model('My_model');

			if($this->My_model->checklogin($_SESSION['e'],$_SESSION['p']))
			{
				
				//$this->booking($_SESSION['e'],$_SESSION['p']);
				 $result['data']=$this->My_model->displaybooking($_SESSION['e'],$_SESSION['p']);
				 $this->load->view('booking',$result);
			}
			else
			{
				echo "<h1 style='color:red'>login fail</h1><br><h2 style='color:black'>If you are not registered plese register first</h2>";
			}
		}

	}
	// 
	// public function send()
	// {	
		
	// 	if ($this->input->post('submit')) {
	// 		$_SESSION['e']=$this->input->post('email');
	// 		$_SESSION['p']=$this->input->post('password');
	// 		$this->load->model('My_model');
	// 		$this->My_model->sendlogin($_SESSION['e'],$_SESSION['p']);
	// 		$result['data']=$this->My_model->sendlogin();
	// 		$this->load->view('index',$result);
	// 	}
	// 	else
	// 		echo "register 1st";
	// }
	
	public function form()
	{
		$this->load->view('register');
		
		if ($this->input->post('submit')) 
		{
			$n=$this->input->post('name');
			$p=$this->input->post('password');
			$e=$this->input->post('email');
			$m=$this->input->post('mobile');
			//echo $n,$p,$e,$m;
		if($this->My_model->savereg($n,$p,$e,$m))		
			redirect("My_controller/login");
			
		else
			redirect("My_controller/error");
		}
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function chuchura(){
		$this->load->view('chuchura');
	}
	public function malda(){
		$this->load->view('malda');
	}
	public function digha(){
		$this->load->view('digha');
	}
	public function darjeeling(){
		$this->load->view('amit');
	}

	public function booking()
	{
		// $result['data']=$this->My_model->displaybooking($email,$pass);
		//  $this->load->view('booking',$result);
		// if($this->input->post('submit'))
			$reg_id=$this->input->post('reg_id');
			$to=$this->input->post('email');
			$u=$this->input->post('user');
			$l=$this->input->post('location');
			$p=$this->input->post('price');
			$per=$this->input->post('number');
			$total=$this->input->post('total');
			if($this->My_model->userbook($reg_id,$to,$u,$l,$p,$per,$total)) 
			    $this->mail($to,$l,$p,$per,$total);
			else
				redirect("My_controller/error");
	}
	public function mail($to,$l,$p,$per,$total)
	{
		$config=array(
			'protocol'=>'smtp',
			'smtp_host'=>'ssl://smtp.googlemail.com',
			'smtp_port'=>465,
			'smtp_user'=>'royalbengaltravels07@gmail.com',
			'smtp_pass'=>'rbt12345',
			'charset'  =>'iso-8859-1',
			'mailtype' =>'html',
			'wordwrap' =>TRUE
		);
		// $to=$this->input->post('email');
		// $l=$this->input->post('location');
		// $p=$this->input->post('price');
		// $per=$this->input->post('number');
		// $total=$this->input->post('total');
		$sub="Royel Bengal Travels";
		$body="Booking location: $l <br>Number of Person: $per<br>
		 	price: $p with 10% discount<br>
		 	Total Price: $total";
		//echo $to.$sub.$body;
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->from('avijit1.karmakar@aot.edu.in','');
		$this->email->to($to);
		$this->email->subject($sub);
		$this->email->message($body);
		if ($this->email->send()) {
		 	//echo "Booking Successful";
		 	redirect("My_controller/success");
		} 
		else
		redirect("My_controller/error");	
	}
	public function success(){
		$this->load->view('success');
	}
	public function error(){
		$this->load->view('errorm');
	}

	public function aboutus()
	{
		$this->load->view('Aboutus');
	}

	public function logout()
	{
		session_unset();
		redirect("My_controller/index");
	}



}








?>