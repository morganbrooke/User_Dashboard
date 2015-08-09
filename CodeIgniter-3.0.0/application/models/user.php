<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function __construct(){
	parent::__construct();
		$this->load->library('session');
	}

	public function registration_register($post)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', "First Name", 'required|alpha|trim');
		$this->form_validation->set_rules('last_name', "Last Name", 'required|alpha|trim');
		$this->form_validation->set_rules('email', "Email", 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', "Password", 'required|min_length[6]|trim|md5');
		$this->form_validation->set_rules('confirm password', "Confirm Password", 'matches[password]');
		if($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	public function create($userinfo)
	{
		$query = "INSERT INTO users(first_name, last_name, email, password, created_at, updated_at) 
			VALUES (?,?,?,?, NOW(), NOW())";
		$values = array($userinfo['first_name'], $userinfo['last_name'], $userinfo['email'], $userinfo['password']);
		return $this->db->query($query, $values);
	}
	public function login_validation($post)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', "Email", 'required|valid_email');
		$this->form_validation->set_rules('password', "Password", 'required|trim|md5');
		if($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}
		else
		{
			return TRUE;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
		}
	}
	public function find_user($userinfo)
	{
		$query = "SELECT * FROM users where email = ? AND password = ?";
		$values = array($userinfo['email'], $userinfo['password']);
		return $this->db->query($query, $values)->row_array();
	}
	public function get_all_users()
	{
		$query = $this->db->query("SELECT users.id, CONCAT(users.first_name,' ', users.last_name) as name, email, created_at, member 
				FROM users;");
		return $query->result_array();
	}
	public function show_user_info($id)
	{
		$query = "SELECT * FROM users WHERE id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->row_array();
	}
	public function message_validation($post)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('message', "Message", 'required|trim');
		if($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}
		else
		{
			return TRUE;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
		}
	}
	public function create_message($usermessage)
	{
		$query = "INSERT INTO messages(user_id, message, created_at, updated_at, owner_id) 
			VALUES (?,?, NOW(), NOW(), ?)";
		$values = array($this->session->userdata['logged_user']['id'], $usermessage['message'], $usermessage['owner_id']);
		$this->db->query($query, $values);
	}

// showing messages on the page
	public function show_messages($id)
	{
		$query = "SELECT messages.id, users.first_name, messages.message, messages.created_at
		FROM messages
		LEFT JOIN users
		ON messages.user_id = users.id WHERE messages.owner_id = ? ORDER BY messages.created_at DESC";
		return $this->db->query($query, $id)->result_array();
	}
// putting comments into the database
	public function post_comment($comment)
	{
		$query = "INSERT INTO comments (comment, user_id, message_id, created_at, updated_at)
			VALUES (?,?,?, NOW(), NOW())";
		$values = array($comment['comment'], $this->session->userdata['logged_user']['id'], $comment['message_id']);
		return $this->db->query($query, $values);
	}
	public function comment_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('comment', "Comment", 'required|trim');
		if($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}
		else
		{
			return TRUE;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
		}
	}

// get comment out of database
	public function get_comments($message_id)
	{
		$query="SELECT users.first_name, comments.comment, comments.created_at
			FROM comments
			LEFT JOIN messages ON comments.message_id=messages.id
			LEFT JOIN users ON comments.user_id=users.id
			WHERE comments.message_id = ? ORDER BY comments.created_at ASC";
		return $this->db->query($query, $message_id)->result_array();
	}

// editing information
	public function edit($userinfo)
	{
		$query = "UPDATE users 
			SET first_name = ?, last_name = ?, email = ?, updated_at = NOW() 
			WHERE id = ?";
		return $this->db->query($query, array($userinfo['first_name'], $userinfo['last_name'], $userinfo['id'], $userinfo['email'], $userinfo['description']));
	}
	public function editpassword($userpass)
	{
		$query = "UPDATE users SET password = ?, updated_at = NOW() WHERE id = ?";
		return $this->db->query($query, array($userpass['password']));
	}
	public function singleEdit($id)
	{
		$query = "SELECT * FROM users WHERE id = ?";
		return $this->db->query($query, $id)->row_array();
	}
// destroying session data
	public function logout()
	{
		$this->session->unset_userdata();
	}
// deleting users
	public function delete($id)
	{
		$query = "DELETE FROM products WHERE id = ?";
		return $this->db->query($query, $id);
	}
}
