<?php
    class Dashboard extends CI_Controller {
        
        public function index(){
            $data = array(
                'title' => "Login Page"
            );
            $this->load->view('module/include/header', $data);
            $this->load->view('module/dashboard');
            $this->load->view('module/include/footer');
        }
    }
?>