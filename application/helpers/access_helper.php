<?php
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
                $user_lvl = ($ci->session->userdata('ul_id')) ? $ci->mf->de($ci->session->userdata('ul_id')) : FALSE;
                $username = $ci->mf->de($username);
                $user_id = $ci->mf->de($user_id);
                switch ($ctrl) {
                    case 'admin':
                        // has ul_id
                        if ($type != $ctrl) {
                            $ci->session->set_flashdata('warning' , 'You don\'t have authorization to view this page!');
                            redirect(site_url(), 'refresh');
                        }
                        return adminCheck($user_id , $username);
                        break;
                    case 'distributor':
                        if ($user_lvl !== FALSE) {
                            // Super Admin Klu nk access distributor page ;
                            // Super Admin : ul_id = 1;
                            if ($user_lvl == 1) {
                                return adminCheck($user_id , $username);
                            }else{
                                $ci->session->set_flashdata('warning' , 'You don\'t have authorization to view this page!');
                                redirect(site_url('admin/dashboard'), 'refresh');
                            }
                        }else{
                            if ($type != $ctrl) {
                                $ci->session->set_flashdata('warning' , 'You don\'t have authorization to view this page!');
                                redirect(site_url(), 'refresh');
                            }
                            $ci->load->model('distributor/M_d_users' , 'mdu');
                            $ul_id = $ci->session->userdata('ul_id');
                            if ($ci->mdu->getUsername($user_id , $username)) {
                                return TRUE;
                            }else{
                                $sesData = $ci->session->all_userdata();
                                foreach ($sesData as $key) {
                                    $ci->session->unset_userdata($key);
                                }
                                $ci->session->set_flashdata('warning' , 'Ops! wrong session data. Please Login Again.');
                                redirect(site_url('distributor'), 'refresh');
                            }
                        }
                        break;
                    case 'shopper':
                        if ($user_lvl !== FALSE) {
                            // Super Admin Klu nk access Shopper page ;
                            // Super Admin : ul_id = 1;
                            if ($user_lvl == 1) {
                                return adminCheck($user_id , $username);
                            }else{
                                $ci->session->set_flashdata('warning' , 'You don\'t have authorization to view this page!');
                                redirect(site_url('admin/dashboard'), 'refresh');
                            }
                        }else{
                            if ($type != $ctrl) {
                                $ci->session->set_flashdata('warning' , 'You don\'t have authorization to view this page!');
                                redirect(site_url(), 'refresh');
                            }
                            $ci->load->model('shopper/M_s_users' , 'msu');
                            $ul_id = $ci->session->userdata('ul_id');
                            if ($ci->msu->getUsername($user_id , $username)) {
                                return TRUE;
                            }else{
                                $sesData = $ci->session->all_userdata();
                                foreach ($sesData as $key) {
                                    $ci->session->unset_userdata($key);
                                }
                                $ci->session->set_flashdata('warning' , 'Ops! wrong session data. Please Login Again.');
                                redirect(site_url('shopper'), 'refresh');
                            }
                        }
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

if (! function_exists('adminCheck'))
{
    function adminCheck($user_id , $username)
    {
        $ci =& get_instance();
        $ci->load->model('admin/M_a_users' , 'mau');

        if ($ci->mau->getUsername($user_id , $username)) {
            return TRUE;
        }else{
            $sesData = $ci->session->all_userdata();
            foreach ($sesData as $key) {
                $ci->session->unset_userdata($key);
            }
            $ci->session->set_flashdata('warning' , 'Ops! wrong session data. Please Login Again.');
            redirect(site_url('admin'), 'refresh');
        }
    }
}
?>
