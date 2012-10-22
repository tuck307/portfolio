<?php

class Home extends CI_Controller {

    function Home(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('breadcrumb');
    }
    
    function index() {
       
        $data['url'] = base_url();
        $data['myBread'] = set_breadcrumb();
        $this->load->view('templates/header.php', $data);
        $this->load->view('home');
        $this->load->view('templates/footer.php');
    }

}

?>
