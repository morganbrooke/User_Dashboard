<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logins extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}
	public function index()
	{
		$this->load->view('register');
	}
// creating new users in the system
	public function create()
	{
		$this->load->model('user');
		if($this->user->registration_register($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/register_failure');	
		}
		else
		{
			$this->user->create($this->input->post());
			$this->session->set_flashdata('success', "Great Success!");
			redirect('/signin');
		}
	}
// login verification process
	public function login_verify()
	{
		$this->load->model('user');
		if($this->user->login_validation($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
		}
		$user = $this->user->find_user($this->input->post());
		$this->session->set_userdata('logged_user', $user);
		if ($user)
		{
			$this->session->set_userdata('id', $user['first_name']);
			// var_dump($this->session->userdata('id'));
			redirect('/dashboard');
		}
	}
// viewing all of the users in the dahsboard
	public function all_users()
	{
		$this->load->model("user");
		$users = $this->user->get_all_users();
		$this->load->view('userdash', array('users' => $users));
	}
	public function show($id)
	{
		$this->load->model('user');
		$users = $this->user->show_user_info($id);
// pulling messages out of the database
		$messages = array('messages' => $this->user->show_messages($id));

		for($i=0; $i<count($messages['messages']); $i++)
		{
			$messages['messages'][$i]['comments'] = $this->user->get_comments($messages['messages'][$i]['id']);
		}

		$data = $users + $messages;
		// var_dump($data);
		// die();
		$this->load->view('showuser', $data);
	}

// putting messages into the database
	public function post_message($id)
	{
		$this->load->model('user');
		$users = $this->user->show_user_info($id);

		if($this->user->message_validation($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', 'Message cannot be empty!!!');
			redirect('/showuser/'.$id);	
		}
		else
		{
			$this->user->create_message($this->input->post());
			redirect('/showuser/'.$id);
		}
	}
// putting comments into the database
	public function comment($id)
	{
		$this->load->model('user');
		$users = $this->user->show_user_info($id);

		if($this->user->comment_validation($this->input->post()) === FALSE)
		{
			$this->session->set_flashdata('errors', 'Comments cannot be empty!!!');
			redirect('/showuser/'.$id);	
		}
		else
		{
			// var_dump($this->input->post());
			// die();
			$this->user->post_comment($this->input->post());
			redirect('/showuser/'.$id);
		}
	} 
// user editing information
	public function edit($id)
	{
		$this->load->model('user');
		$newinfo = $this->user->singleEdit($id);
		$this->load->view('useredit', $newinfo);
	}
	public function update_user()
	{
		$this->user->edit($this->input->post());
		redirect('/dashboard');
	}
// password information
	public function edit_password($id)
	{
		$this->load->model('user');
		$newinfo = $this->user->singleEdit($id);
		$this->load->view('useredit', $newinfo);
	}
	public function update_password()
	{
		$this->user->editpassword($this->input->post());
		redirect('/dashboard');
	}

// deleting and logging off
	public function delete($id)
	{
		$this->load->model('user');
		$this->user->delete($id);
		redirect('/edituser');
	}
	public function logoff()
	{
		if (isset($_SESSION))
		{
    	unset($_SESSION);
    	session_unset();
    	session_destroy();
    	redirect('/');
    	}
    	else
    	{
    	$this->session->session_destroy();
    	redirect('/');
    	}
	}
}