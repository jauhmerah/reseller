<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
// Distributor Dashboard ----------

var $parent_page = 'admin/dashboard';
    public function __construct() {
        parent::__construct();        
        $this->load->helper('access');
        checkSession('distributor');
    }

    public function index()
    {
        echo "testing jadi distributor";
    }

}
?>
