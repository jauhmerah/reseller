<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
// Distributor Dashboard ----------

	var $parent_page = 'distributor';
	var $component_parent = 'distributor/page';

	var $version = "Reseller System v1.0";
    public function __construct() {
        parent::__construct();
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        date_default_timezone_set('Asia/Kuala_Lumpur');
		$this->load->helper('access');
		$this->load->helper('alertMsg');
		$this->load->helper('sendEmail');

        checkSession('distributor');
    }

    	public function index()
	{
		$this->page('a1');
	
	}

	private function _show($page = 'display' , $data = null , $key = 'a1')
	{
    		//$this->load->library('my_func');
        	$link['link'] = $key;
	     	$this->load->view($this->component_parent.'/head' , array('ver' => $this->version) , FALSE);

	    	$this->load->view($this->component_parent.'/header', $link, FALSE);
        
	    	$this->load->view($this->component_parent.'/sidemenu',$link, FALSE);

        	$this->load->view($this->parent_page.'/'.$page, $data, false);
                
	    	$this->load->view($this->component_parent.'/footer', FALSE);

	    	// $this->load->view($this->component_parent.'/footer2', FALSE);
	}

	public function page($key)
        {
    		 switch ($key) 
    		 {
    		 	case "a1" :
    		 		$data['display']=$this->load->view($this->parent_page.'/index','',true);
                    $this->_show('display', $data, $key);
				break;

				case "p1" :
    		 		$data['display']=$this->load->view($this->parent_page.'/user_profile','',true);
                    $this->_show('display', $data, $key);
				break;


				case "s2" :
    		 		$data['display']=$this->load->view($this->parent_page.'/add_shopper','',true);
                    $this->_show('display', $data, $key);
				 break;

				case 's12':
					if ($this->input->post()) 
					{
					
						$arr = $this->input->post();
						$this->load->database();
						$this->load->model($this->parent_page.'/m_shopper');
						$this->load->model($this->parent_page.'/m_shopper_address');
						$this->load->library('my_func');

						$background=$this->do_upload('fileImg','./asset/distributor/img/avatar');
		
						$arr2 = array(
							'sh_fname' => $arr['fname'], 
							'sh_lname' => $arr['lname'], 
							'sh_icno' => $arr['icno'], 							
							'sh_username' => $arr['username'], 
							'sh_email' => $arr['email'],
							'sh_password' => $this->my_func->en($arr['password']),
							'sh_avatar' =>  $background,
						);

						$id = $this->m_shopper->insert($arr2);
					
						$sizeArr = sizeof($arr['AddId']);
						for ($i=0; $i < $sizeArr; $i++) { 

							if (isset($arr['cu'][$i])) 
							{
								// if ($arr['cu'][$i] == true) {
								// 	$curr=1;	
								// }
								$curr=1;
							}
							else {
								$curr=0;
							}

							$arr3 = array(
								'sh_id' => $id,
								'sa_address' => $arr['address'][$i],
								'sa_tel' => $arr['phone'][$i],
								'sa_postcode' => $arr['postcode'][$i],
								'sa_city' => $arr['city'][$i],								
								'sa_company' => $arr['company'][$i],
								'sa_country' => $arr['country'][$i],
								'sa_current' => $curr,
								'sa_note' => $arr['note'][$i],
							 );
							
							$this->m_shopper_address->insert($arr3);	
						}

						$email['fromName'] = "Ai System";
                        $email['fromEmail'] = "noreply@nastyjuice.com";
                        $email['toEmail'] = ' finance@nastyjuice.com , zul@nastyjuice.com ';
                        $email['subject'] = 'Verify your e-mail address of your reseller system account';
                        $email['html'] = true;
						
						$email['msg'] = $this->load->view($this->parent_page.'/email/Vverify',$arr,true);
						sendEmail($email);
						$this->session->set_flashdata('success','Shopper Details are successfully added, Shopper need to verify their account first to activate their account.');
						redirect(site_url('distributor/dashboard/page/m1'),'refresh');
						
						

					}
				break;
				 case "m1" :

				 	$this->load->database();
                    $this->load->model($this->parent_page.'/m_shopper');
                    $this->load->library('pagination');
					$this->load->helper('array');
					
					$like = null;
                    $filter = null;
                    $limit_per_page = 10;

					$page = $this->uri->segment(5,1);
                    $page--;

                    $arr['numPage'] = $page*10;
					$arr['total'] = $this->m_shopper->count($filter,$like);  
					$arr['result'] = $this->m_shopper->get_curr($limit_per_page , $arr['numPage'] , $filter , $like);

					$config['base_url'] = site_url('distributor/dashboard/page/m1');
                    $config['total_rows'] = $arr['total'];
                    $config['per_page'] = $limit_per_page;
                    $config["uri_segment"] =5;

					// custom paging configuration
                    $config['num_links'] = 3;
                    $config['use_page_numbers'] = TRUE;
                    $config['reuse_query_string'] = TRUE;
                     
                    $config['cur_tag_open'] = '<li><a class="current"><strong>';
                    $config['cur_tag_close'] = '</strong></a></li>';
                    $config['num_tag_open'] = '&nbsp;<li>';
                    $config['num_tag_close'] = '</li>&nbsp;';
                    $config['prev_tag_open'] = '<li>';
                    $config['prev_tag_close'] = '</li>';
                    $config['last_tag_open'] = '<li>';
                    $config['last_tag_close'] = '</li>';
                    $config['next_tag_open'] = '<li>';
                    $config['next_tag_close'] = '</li>';
                    $config['first_tag_open'] = '<li>';
                    $config['first_tag_close'] = '</li>';
                    $config['next_link'] = 'Next';
                    $config['prev_link'] = 'Previous';
                    $this->pagination->initialize($config);
                    $arr["link"] = $this->pagination->create_links();

				    $data['title'] = '<i class="fa fa-fw fa-list"></i> Shopper List';                        
					$data['class'] = 'forms';
    		 		$data['display']=$this->load->view($this->parent_page.'/shopper_list',$arr,true);
                    $this->_show('display', $data, $key);
				 break;
				 
				case 'verify':
					$this->load->view($this->parent_page.'/email/Vverify',true);
				break;
                default:
                    $this->_show();
                break; 
    		 }
    	}

		public function do_upload($img = null,$file_url = null)
		{
				
						$config = array(
                        'upload_path' => $file_url,
                        'allowed_types' => "gif|jpg|png|jpeg",
                        'overwrite' => TRUE,
                        'max_size' => "4000", // Can be set to particular file size , here it is 4 MB(4000 Kb)
                        'max_height' => "4000",
                        'max_width' => "4000",
                        'encrypt_name' => true
                        );

						 $this->load->library('Upload', $config);
						
						
						$this->upload->initialize($config);
						$result = $this->upload->do_upload($img);
						if (!$result) {
							$error = $this->upload->display_errors();
							$this->session->set_flashdata('warning',$error);
							
							return false;
						}
						else {
							$data = $this->upload->data();
							$background=$data['raw_name'].$data['file_ext'];

							return $background;
						}
		}
    	
		public function checkUsername()
		{
			if ($this->input->post()) 
			{
				$username = $this->input->post('username');

				$this->load->database();
				$this->load->model($this->parent_page.'/m_shopper');

				$username2 = array('sh_username' => $username );

				$data = $this->m_shopper->get($username2);

				if ($data) 
				{
					echo true;
				}
				else
				{
					echo false;
				}
				
			}
        }
        public function checkEmail()
        {
            if ($this->input->post()) {
               
                $email = $this->input->post('email');

                $this->load->database();
                
				$this->load->model($this->parent_page.'/m_shopper');
                
				$email2 = array('sh_email' => $email );
                
                $data = $this->m_shopper->get($email2);
                
                if ($data) 
				{
					echo true;
				}
				else
				{
					echo false;
				}
                
            }
        }

        public function getAjaxAddList()
        {
        	if ($this->input->post()) 
        	{
                $temp['num'] = $this->input->post('num');
                $this->load->view($this->parent_page."/ajax/getAjaxAddList",$temp);
        	}
        }

}
?>
