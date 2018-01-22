<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 *
 * @extends CI_Model
 */
class M_d_users extends CI_Model {

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
			'di_username'   => $username,
			'di_email'      => $email,
			'di_password'   => $this->my_func->en($password),
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

		$this->db->select('di_password');
		$this->db->from('users');
		$this->db->where('di_username', $username);
		$pass = $this->db->get()->row('di_password');
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

		$this->db->select('di_id');
		$this->db->from('users');
		$this->db->where('di_username', $username);

		return $this->db->get()->row('di_id');

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
		$this->db->where('di_id', $user_id);
		return $this->db->get()->row();

	}

}
