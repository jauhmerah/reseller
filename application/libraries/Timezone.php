<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timezone {

    public function __construct()
    {
        $this->obj =& get_instance();
        $this->obj->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->obj->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->obj->output->set_header('Pragma: no-cache');
        $this->obj->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        date_default_timezone_set('Asia/Kuala_Lumpur');
    }

}
?>
