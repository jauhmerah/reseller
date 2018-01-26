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
	const TABLE_NAME = 'users';
	const PRI_NAME = 'us_';

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
			self::PRI_NAME.'username'   => $username,
			self::PRI_NAME.'email'      => $email,
			self::PRI_NAME.'password'   => $this->my_func->en($password),
		);

		return $this->db->insert(self::TABLE_NAME, $data);

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

		$this->db->select(self::PRI_NAME.'password');
		$this->db->from(self::TABLE_NAME);
		$this->db->where(self::PRI_NAME.'username', $username);
		$pass = $this->db->get()->row(self::PRI_NAME.'password');
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

		$this->db->select(self::PRI_NAME.'id');
		$this->db->from(self::TABLE_NAME);
		$this->db->where(self::PRI_NAME.'username', $username);

		return $this->db->get()->row(self::PRI_NAME.'id');

	}

	public function getUsername($us_id = NULL , $username = NULL)
	{
		if ($us_id != NULL) {
			$this->db->select(self::PRI_NAME.'username');
			$this->db->from(self::TABLE_NAME);
			$this->db->where(self::PRI_NAME.'id', $us_id);
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

		$this->db->from(self::TABLE_NAME);
		$this->db->where(self::PRI_NAME.'id', $user_id);
		return $this->db->get()->row();

	}

	public function get($where = NULL) {
        $this->db->select('*');
        $this->db->from(self::TABLE_NAME);
        if ($where !== NULL) {
            if (is_array($where)) {
                foreach ($where as $field=>$value) {
                    $this->db->where($field, $value);
                }
            } else {
                $this->db->where(self::PRI_INDEX, $where);
            }
        }
        $result = $this->db->get()->result();
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

	public function get_user_id_from_email($email) {

		$this->db->select(self::PRI_NAME.'id');
		$this->db->from(self::TABLE_NAME);
		$this->db->where(self::PRI_NAME.'email', $email);

		return $this->db->get()->row(self::PRI_NAME.'id');

	}
}
