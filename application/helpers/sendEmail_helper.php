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
                if($ci->email->send()){
                    return true;
                }else{
                    $ci->session->set_flashdata('danger' , 'Send Email Error');
                    return FALSE;
                }
            }else{
                $ci->session->set_flashdata('danger', 'Please set to->email');
                return false;
            }
        }
        return false;
    }
}

if (! function_exists('sendEmail2'))
{
    function sendEmail2($to = NULL , $title = 'Testing' , $msg = NULL){
        if ($to == NULL) {
            return FALSE;
        }
        $ci =& get_instance();
        $ci->load->library('email');
        $ci->email->set_newline("\r\n");
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://moon.sfdns.net';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'epul@nastyjuice.com';
        $config['smtp_from_name'] = 'Nasty Reseller';
        $config['smtp_pass'] = 'selasih2014';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html';
        $ci->email->initialize($config);
        $ci->email->from($config['smtp_user'],$config['smtp_from_name']);
        $ci->email->to($to);
        $ci->email->subject($title);
        $ci->email->message($msg);
        if($ci->email->send()){
            return true;
        }else{
            $ci->session->set_flashdata('danger' , 'Send Email Error');
            return FALSE;
        }
    }
}
?>
