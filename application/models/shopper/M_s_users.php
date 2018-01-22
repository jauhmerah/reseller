<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 *
 * @extends CI_Model
 */
class M_s_users extends CI_Model {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		parent::__construct();
		$this->load->database();
	}

	/**
	 * create_user function.
	 *
	 * @access public
	 * @param mixed $username
	 * @param mixed $email
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function create_user($username, $email, $password) {

		$data = array(
			'sh_username'   => $username,
			'sh_email'      => $email,
			'sh_password'   => $this->my_func->en($password),
		);

		return $this->db->insert('users', $data);

	}

	/**
	 * resolve_user_login function.
	 *
	 * @access public
	 * @param mixed $username
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function resolve_user_login($username, $password) {

		$this->db->select('sh_password');
		$this->db->from('users');
		$this->db->where('sh_username', $username);
		$pass = $this->db->get()->row('sh_password');
		if ($pass) {
			$pass = $this->mf->de($pass);
		}else{
			return FALSE;
		}
		if ($pass === $password) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	/**
	 * get_user_id_from_username function.
	 *
	 * @access public
	 * @param mixed $username
	 * @return int the user id
	 */
	public function get_user_id_from_username($username) {

		$this->db->select('sh_id');
		$this->db->from('users');
		$this->db->where('sh_username', $username);
		return $this->db->get()->row('sh_id');

	}

	/**
	 * get_user function.
	 *
	 * @access public
	 * @param mixed $user_id
	 * @return object the user object
	 */
	public function get_user($user_id) {

		$this->db->from('users');
		$this->db->where('sh_id', $user_id);
		return $this->db->get()->row();

	}

}
