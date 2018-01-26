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
	var $parent_page = 'login/admin';
	public function __construct() {

		parent::__construct();
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        date_default_timezone_set('Asia/Kuala_Lumpur');

		$this->load->model('admin/M_a_users' , 'mu');
		$this->load->helper('alertMsg');
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
		if ($this->input->post('username') && $this->input->post('password')) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->mu->resolve_user_login($username, $password);
			switch ($result) {
				case '0':
                    // Username Not found;
					$this->session->set_flashdata('warning' , 'Username not found');
					break;
				case '1':
					$this->session->set_flashdata('danger' , 'Wrong Password ...');
					break;
				case '2':
					$user_id = $this->mu->get_user_id_from_username($username);
					$user    = $this->mu->get_user($user_id);

					// set session user datas
					$_SESSION['user_id']      = $this->mf->en($user->us_id);
					$_SESSION['username']     = $this->mf->en($user->us_username);
					$_SESSION['confirmed'] = $this->mf->en($user->us_verify);
					$_SESSION['ul_id']     = $this->mf->en($user->ul_id);
					$_SESSION['type'] = $this->mf->en('admin');
					break;
			}
			if ($result == 2) {
				redirect(site_url('admin/dashboard') , 'refresh');
			}else{
				redirect(site_url('admin') , 'refresh');
			}
		}else{
			$this->load->view('login/header');
			$this->load->view($this->parent_page."/Vlogin_admin");
			$this->load->view('login/footer');
		}
	}

	/**
	 * logout function.
	 *
	 * @access public
	 * @return void
	 */
	public function logout() {

			$sessData = $this->session->all_userdata();
			foreach ($sessData as $key) {
				$this->session->unset_userdata($key);
			}
			unset($sessData);
			$this->session->set_flashdata('success' , 'Log Out Done....');
			redirect(site_url('admin') ,'refresh');

	}

	public function forgotPass()
	{
		$this->load->model('user_setting/M_forgot_pass', 'mfp');
		$fp_data = $this->mfp->get(4);
		$this->load->view('login/email/V_email_forgot');
		return ;
		if ($this->input->post('email')) {
            // In an account matches that email address, you should receive an email with instructions on how to reset your password shortly.
			$email = $this->input->post('email');
			$user_id = $this->mu->get_user_id_from_email($email);
			if($user_id){
				$this->load->model('user_setting/M_forgot_pass', 'mfp');
				$fp_ip = $this->input->ip_address();
				// NOTE: person_type : M_{?}_user > model name;
				$fp_id = $this->mfp->insert(array('person_id' => $user_id , 'person_type' => 'a' , 'fp_ip' => $fp_ip));
				if ($fp_id) {
					$fp_data = $this->mfp->get($fp_id);
					$this->load->view('login/email/V_email_forgot');
				}else{
					$this->session->set_flashdata('danger' , 'Forgot Password Module Error : #aufp01');
					redirect(site_url('admin/forgot'));
				}
			}else{
				// NOTE: Klu xjumpo email in database.
				$this->session->set_flashdata('danger' , 'Email not found!!!');
				redirect(site_url('admin/forgot'));
			}
		}else{
			$this->load->view('login/header');
			$this->load->view($this->parent_page."/Vforgotpswd");
			$this->load->view('login/footer');
		}
	}

}
