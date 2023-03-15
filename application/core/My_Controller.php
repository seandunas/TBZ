<?php

    class My_Controller extends CI_Controller{

        public function create_page($page, $arrayData=[]){
            $this->load->view('module/include/header', $arrayData);
            $this->load->view('module/'.$page);
            $this->load->view('module/include/footer');
        }

    }

    
?>