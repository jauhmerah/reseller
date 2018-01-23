<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 *
 * @extends CI_Model
 */
class M_a_users extends CI_Model {

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
			'us_username'   => $username,
			'us_email'      => $email,
			'us_password'   => $this->my_func->en($password),
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

		$this->db->select('us_password');
		$this->db->from('users');
		$this->db->where('us_username', $username);
		$pass = $this->db->get()->row('us_password');
		if ($pass) {
			$pass = $this->mf->de($pass);
		}else{
			return 0;
		}
		if ($pass === $password) {
			return 2;
		}else{
			return 1;
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

		$this->db->select('us_id');
		$this->db->from('users');
		$this->db->where('us_username', $username);

		return $this->db->get()->row('us_id');

	}

	public function getUsername($us_id = NULL , $username = NULL)
	{
		if ($us_id != NULL) {
			$this->db->select('us_username');
			$this->db->from('users');
			$this->db->where('us_id', $us_id);
			$result = $this->db->get()->row();
			if ($username == NULL) {
				return $result;
			}else{
				if (sizeof($result) == 0) {
					return FALSE;
				}				
				if ($username == $result->us_username) {
					return TRUE;
				}else{
					return FALSE;
				}
			}
		}else{
			return FALSE;
		}
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
		$this->db->where('us_id', $user_id);
		return $this->db->get()->row();

	}

}
