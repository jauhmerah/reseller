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
            if ($ci->session->userdata('type')) {
                $type = $ci->session->userdata('type');
                $type = $ci->mf->en($type);
                $user_id = $ci->session->userdata('user_id');
                $username = $ci->session->userdata('username');                
                switch ($type) {
                    case 'admin':
                        // has ul_id
                        $ci->load->model('admin/M_a_users' , 'mu');
                        $ul_id = $ci->session->userdata('ul_id');
                        if ($ci->mu->) {
                            # code...
                        }

                        # code...
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
            $ci->mf->de();
            echo "<pre>";
            print_r($ci->session->all_userdata());
            echo "</pre>";
        }else{
            redirect(site_url() , 'refresh');
        }
    }
}
?>
