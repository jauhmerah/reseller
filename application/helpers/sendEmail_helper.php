<?php
if (! function_exists('sendEmail'))
{
    function sendEmail($email = null){
        if ($email != null && is_array($email)) {
            $ci =& get_instance();
            $ci->load->library('email');
            $ci->email->from($email['fromEmail'], $email['fromName']);
            if(isset($email['toEmail'])){
                $ci->email->to($email['toEmail']);
                if (isset($email['toCc'])) {
                    if (is_array($email['toCc'])) {
                        foreach ($email['toCc'] as $key){
                            $ci->email->cc($key);
                        }
                    }else{
                        $ci->email->cc($email['toCc']);
                    }
                }
                if (isset($email['toBcc'])) {
                    if (is_array($email['toBcc'])){
                        foreach ($email['toBcc'] as $key)
                        {
                            $ci->email->bcc($key);
                        }
                    }else
                        $ci->email->bcc($email['toBcc']);
                }
                $ci->email->subject($email['subject']);
                $ci->email->message($email['msg']);
                $ci->email->set_mailtype('html');
                $ci->email->send();
                return true;
            }else{
                $ci->session->set_flashdata('error', 'Please set to->email');
                return false;
            }
        }
        return false;
    }
}
?>
