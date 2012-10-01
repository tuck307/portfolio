<?php

class Mobile extends CI_Controller{
    
    
    function Mobile(){
     parent::__construct();
     $this->load->helper('url');
     $this->load->helper('form');
     $this->load->helper('breadcrumb');
    }
    
    function index(){
        
        $data['url'] = base_url();
        $data['myBread'] = set_breadcrumb();
        $data['query'] = $this->db->get('phone');
        
        $this->load->view('templates/header.php', $data);
        $this->load->view('pages/mobile_view');
        $this->load->view('templates/footer.php');
    }
}
?>
