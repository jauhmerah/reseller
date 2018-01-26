<?php
    if (! function_exists('msg'))
    {
        function msg($type = NULL , $text = NULL)
        {
            $ci =& get_instance();
            $msg = "";
    		if ($ci->session->flashdata('success') || $type == 'success') {
                $m = ($ci->session->flashdata('success')) ? $ci->session->flashdata('success') : $text ;
    			$msg .= '<div class="login100-form alert alert-success" style="display : none;"><i class="fa fa-check" aria-hidden="true"></i> Success : '.$m.' </div>';
    		}if ($ci->session->flashdata('warning') || $type == 'warning') {
                $m = ($ci->session->flashdata('warning')) ? $ci->session->flashdata('warning') : $text ;
    			$msg .= '<div class="login100-form alert alert-warning" style="display : none;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Warning : '.$m.' </div>';
    		}if ($ci->session->flashdata('info') || $type == 'info') {
                $m = ($ci->session->flashdata('info')) ? $ci->session->flashdata('info') : $text ;
    			$msg .= '<div class="login100-form alert alert-info" style="display : none;"><i class="fa fa-info" aria-hidden="true"></i> Info : '.$m.' </div>';
    		}if ($ci->session->flashdata('default') || $type == 'default') {
                $m = ($ci->session->flashdata('default')) ? $ci->session->flashdata('default') : $text ;
    			$msg .= '<div class="login100-form alert alert-default" style="display : none;"><i class="fa fa-hashtag" aria-hidden="true"></i> Note : '.$m.' </div>';
    		}if ($ci->session->flashdata('primary') || $type == 'primary') {
                $m = ($ci->session->flashdata('primary')) ? $ci->session->flashdata('primary') : $text ;
    			$msg .= '<div class="login100-form alert alert-primary" style="display : none;"><i class="fa fa-info-circle" aria-hidden="true"></i> Information : '.$m.' </div>';
    		}if ($ci->session->flashdata('danger') || $type == 'danger') {
                $m = ($ci->session->flashdata('danger')) ? $ci->session->flashdata('danger') : $text ;
    			$msg .= '<div class="login100-form alert alert-danger" style="display : none;"><i class="fa fa-times-circle" aria-hidden="true"></i> Error : '.$m.' </div>';
    		}
            return $msg;
        }
    }
?>
