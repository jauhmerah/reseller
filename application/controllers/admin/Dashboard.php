<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
// Admin Dashboard ----------

var $parent_page = 'admin/dashboard';
    public function __construct() {
        parent::__construct();        
        $this->load->helper('access');
        checkSession('admin');
    }

    public function index()
    {
        echo "testing jadi";
    }

}
?>
