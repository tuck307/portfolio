<?php

class Portfolio extends CI_Controller {

    function Portfolio(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('breadcrumb');
    }
    
    function index() {
       
        $data['url'] = base_url();
        $data['myBread'] = set_breadcrumb();
        $this->load->view('templates/header.php', $data);
        $this->load->view('pages/portfolio_view');
        $this->load->view('templates/footer.php');
    }
    

    function Mobile(){
        
        $data['url'] = base_url();
        $data['myBread'] = set_breadcrumb();
        $data['query'] = $this->db->get('phone');

        $this->load->view('templates/header.php', $data);
        $this->load->view('pages/mobile_view');
        $this->load->view('templates/footer.php');
    }

    function Web() {

        $data['url'] = base_url();
        $data['myBread'] = set_breadcrumb();

        $this->load->view('templates/header.php', $data);
        $this->load->view('pages/web_view');
        $this->load->view('templates/footer.php');
    }

    function Projects() {

        $data['url'] = base_url();
        $data['myBread'] = set_breadcrumb();

        $this->load->view('templates/header.php', $data);
        $this->load->view('pages/projects_view');
        $this->load->view('templates/footer.php');
    }
    
    function get_images(){
       
       $query = $this->db->query('SELECT * FROM phoneimages where title = "'.$_POST['title'].'"');
        foreach ($query->result() as $row)
            {
                $arr = array('title'=>$row->title,'image'=>$row->image,'desc'=>$row->paragraph);
                echo json_encode($arr);
            }
    }



}

?>
