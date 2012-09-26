<?php

class Web extends CI_Controller{
    
    
    function Web(){
       parent::__construct();
    $this->load->helper('url');
     $this->load->helper('form');
     
    }
    
    function index(){
          $data['url'] = base_url();
        $this->load->view('templates/header.php', $data);
        $this->load->view('pages/web_view');
        $this->load->view('templates/footer.php');
    }
}
?>
