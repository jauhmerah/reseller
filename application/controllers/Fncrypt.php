<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encrypt extends CI_Controller{

    public function mode($mode = NULL)
    {
        if ($this->input->get('key')) {
            $text = $this->input->get('key');
        }
        switch ($mode) {
            case 'en':
                echo $this->mf->en($text);
                break;
            case 'de':
                echo $this->mf->de($text);
                break;
            default:
                break;
        }
    }
}
?>
