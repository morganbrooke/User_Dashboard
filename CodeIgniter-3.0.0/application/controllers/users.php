<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function load_signin()
	{
		$this->load->view('signin');
	}
	public function show()
	{
		$this->load->view('userdash');
	}
	public function home()
	{
		$this->load->view('index');
	}
	public function loginfail()
	{
		$this->load->view('register');
	}
	public function edits()
	{
		$this->load->view('edituser');
	}
	public function messagefail()
	{
		$this->load->view('showuser');
	}
	public function post_message()
	{
		$this->load->view('showuser');
	} 
	public function user_edit()
	{
		$this->load->view('useredit');
	}
}