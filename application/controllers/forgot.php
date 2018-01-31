<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Forgot extends CI_Controller {

		var $parent_page = 'login';

	    function __construct() {
	        parent::__construct();
			$this->load->helper('alertMsg');
	    }

	    function index() {
	        if ($this->input->get('k') && $this->input->get('key')) {
				$fp_id = $this->input->get('k');
				$fp_date = $this->input->get('key');
				$fp_id = $this->mf->de($fp_id);
				$fp_date = $this->mf->de($fp_date);
				$this->load->model('user_setting/M_forgot_pass', 'mfp');
				$where = array('fp.fp_id' => $fp_id , 'fp.fp_date' => $fp_date , 'fp.fp_hit' => 0);
				$user = $this->mfp->getForgot($where);
				if ($user) {
					$this->mfp->update(array('fp_hit' => 1));
					$data['user'] = $user;
					$this->load->view('login/header');
					$this->load->view($this->parent_page."/admin/VchangePassword" , $data);
					$this->load->view('login/footer');
				}else{
					$this->session->set_flashdata('warning' , 'This link is invalid');
					redirect(site_url() , 'refresh');
				}
	        }else{
				if ($this->input->post('key')) {
					$arr = $this->input->post();
					if ($this->mf->de($arr['key']) === 'reset') {
						unset($arr['key']);
						$arr['fp_id'] = $this->mf->de($arr['fp_id']);
						$pass = $this->mf->en($arr['pass']) ;
						$this->load->model('user_setting/M_forgot_pass', 'mfp');
						$fp_data = $this->mfp->get($arr['fp_id']);
						if ($fp_data) {
							$person_id = $fp_data->person_id;
							$person_type =$fp_data->person_type;
							switch ($person_type) {
								case 'a':
									$this->load->model('admin/M_a_users', 'mau');
									$arr = array('us_password' => $pass);
									if ($this->mau->update($arr , $person_id)) {
										$this->session->set_flashdata('success' , 'Change user password success.');
									}else{
										$this->session->set_flashdata('danger' , 'Change user password error');
									}
									redirect(site_url('admin') , 'refresh');
									break;
								case 'd':
									$this->load->model('distributor/M_d_users' , 'mdu');
									$arr = array('di_password' => $pass);
									if ($this->mdu->update($arr , $person_id) ){
										$this->session->set_flashdata('success' , 'Change user password success.');
									}else{
										$this->session->set_flashdata('danger' , 'Change user password error');
									}
									redirect(site_url('distributor' , 'refresh'));
									break;
								case 's':
									$this->load->model('shopper/M_s_users' , 'msu');
									$arr = array('sh_password' => $pass);
									if ($this->msu->update($arr , $person_id)) {
										$this->session->set_flashdata('success' , 'Change user password success.');
									}else{
										$this->session->set_flashdata('danger' , 'Change user password error');
									}
									redirect(site_url('distributor' , 'refresh'));
									break;
								default:
									$this->session->set_flashdata('danger' , 'User type error');
									redirect(site_url(), 'refresh');
									break;
							}
						}else{
							$this->session->set_flashdata('danger' , 'Reset Data Not Found.');
							redirect(site_url('login') , 'refresh');
						}
					}else{
						$this->session->set_flashdata('danger' , 'Ops wrong path.');
						redirect(site_url('login') , 'refresh');
					}
				}else{
					show_404();
				}
			}
	    }
	}

?>
