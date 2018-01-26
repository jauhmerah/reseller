<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Forgot extends CI_Controller {

	    function __construct() {
	        parent::__construct();
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
					print_r($user);
				}else{
					$this->session->set_flashdata('warning' , 'Link is invalid');
					redirect(site_url() , 'refresh');
				}
	        }else{
				show_404();
			}
	    }
	}

?>
