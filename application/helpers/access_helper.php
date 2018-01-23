<?php
if (! function_exists('checkAccess'))
{
    function checkAccess($ctrl = NULL , $currentCtrl = NULL)
    {
        if ($ctrl == NULL || $currentCtrl == NULL) {
            return FALSE;
        }
        if ($ctrl === $currentCtrl) {

        }
        return TRUE;
    }
}

if (! function_exists('checkSession'))
{
    function checkSession($ctrl = NULL)
    {
        $ci =& get_instance();
        if ($ctrl != NULL) {
            if ($ci->session->userdata('type') && $ci->session->userdata('user_id') && $ci->session->userdata('username')) {
                $type = $ci->session->userdata('type');
                $type = $ci->mf->de($type);
                $user_id = $ci->session->userdata('user_id');
                $username = $ci->session->userdata('username');
                $user_id = $ci->session->userdata('user_id');
                $username = $ci->mf->de($username);
                $user_id = $ci->mf->de($user_id);
                switch ($type) {
                    case 'admin':
                        // has ul_id
                        $ci->load->model('admin/M_a_users' , 'mau');
                        $ul_id = $ci->session->userdata('ul_id');
                        if ($ci->mau->getUsername($user_id , $username)) {
                            return TRUE;
                        }else{
                            $sesData = $ci->session->all_userdata();
                            foreach ($sesData as $key) {
                                $ci->session->unset_userdata($key);
                            }
                            $ci->session->set_flashdata('warning' , 'Ops! wrong session data. Please Login Again.');
                            //redirect(site_url('admin'), 'refresh');
                        }
                        break;
                    case 'distributor':
                    // TODO:
                        # code...
                        break;
                    case 'shopper':
                        # code...
                        break;

                    default:
                        # code...
                        break;
                }
            }
        }else{
            redirect(site_url() , 'refresh');
        }
    }
}
?>
