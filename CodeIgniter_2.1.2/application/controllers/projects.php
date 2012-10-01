<?php

class Projects extends CI_Controller{
    
    
    function Projects(){
     parent::__construct();
     $this->load->helper('url');
     $this->load->helper('form');
     $this->load->helper('breadcrumb');
    }
    
    function index(){
        
        $data['url'] = base_url();
        $data['myBread'] = set_breadcrumb();
        
        $this->load->view('templates/header.php', $data);
        $this->load->view('pages/projects_view');
        $this->load->view('templates/footer.php');
    }
}
?>
