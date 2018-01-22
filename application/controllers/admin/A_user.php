<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 *
 * @extends CI_Controller
 */
class A_user extends CI_Controller {
	/**	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	var $parent_page = 'admin/user';
	public function __construct() {

		parent::__construct();
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        date_default_timezone_set('Asia/Kuala_Lumpur');

		$this->load->model('admin/M_a_users' , 'mu');
	}


	public function index() {



	}

	/**
	 * register function.
	 *
	 * @access public
	 * @return void
	 */
	public function register() {

		// create the data object
		$data = new stdClass();

		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');

		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

		if ($this->form_validation->run() === false) {

			// validation not ok, send validation errors to the view
			$this->load->view('login/header');
			$this->load->view('login/user/register/register', $data);
			$this->load->view('login/footer');

		} else {

			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');

			if ($this->mu->create_user($username, $email, $password)) {

				// user creation ok
				$this->load->view('login/header');
				$this->load->view('login/user/register/register_success', $data);
				$this->load->view('login/footer');

			} else {

				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';

				// send error to the view
				$this->load->view('login/header');
				$this->load->view('login/user/register/register', $data);
				$this->load->view('login/footer');

			}

		}

	}

	/**
	 * login function.
	 *
	 * @access public
	 * @return void
	 */
	public function login() {

		// create the data object
		$data = new stdClass();

		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');

		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {

			// validation not ok, send validation errors to the view
			$this->load->view('login/header');
			$this->load->view('login/user/login/login');
			$this->load->view('login/footer');

		} else {

			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($this->mu->resolve_user_login($username, $password)) {

				$user_id = $this->mu->get_user_id_from_username($username);
				$user    = $this->mu->get_user($user_id);

				// set session user datas
				$_SESSION['user_id']      = $this->mf->en($user->us_id);
				$_SESSION['username']     = $this->mf->en($user->us_username);
				$_SESSION['confirmed'] = $this->mf->en($user->us_verify);
				$_SESSION['ul_id']     = $this->mf->en($user->ul_id);
				$_SESSION['type'] = $this->mf->en('admin');

				// user login ok
				redirect(site_url('admin/A_user/login2'));

			} else {

				// login failed
				$data->error = 'Wrong username or password.';

				// send error to the view
				$this->load->view('login/header');
				$this->load->view('login/user/login/login', $data);
				$this->load->view('login/footer');

			}

		}

	}

	/**
	 * logout function.
	 *
	 * @access public
	 * @return void
	 */
	public function logout() {

			$this->session->sess_destroy();
			redirect(site_url($this->site));

	}

	public function login2()
	{
		$this->load->view('login/header');
		$this->load->view('login/user/login/login_success');
		$this->load->view('login/footer');
	}

}
