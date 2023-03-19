<?php
    class Dashboard extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('user_model',null,true);
            //$this->load->model('login_model',null,true);
            $this->load->library('session');
            $this->load->library('pagination');

            if(!$this->session->has_userdata('is_logged')){
                redirect("login"); //codeigniter helper - redirecting

                //header["location: item/index"]; native php - redirecting
            }
        }
        public function index(){

            $user = $this->user_model->getcurrentuser($this->session->userdata('current_user'));
            $service_quantity = $this->user_model->gettotalrows_service();
            $users_quantity = $this->user_model->gettotalrows_user();
            $data = array(
                'title' => "Dashboard"
            );

            $cardData = array(
                'users_quantity' =>  $users_quantity,
                'service_quantity' =>  $service_quantity,
            );
            $chartData = array(
                'dog' => $this->user_model->getservicequantitybycategorydog(),
                'cat' => $this->user_model->getservicequantitybycategorycat(),
                'both' => $this->user_model->getservicequantitybycategoryboth()

            );

            $consolidatedData['cardData'] = $cardData;
            $consolidatedData['chartData'] = $chartData;
            $consolidatedData['user'] = $user;
            $this->load->view('module/include/header', $data);
            $this->load->view('module/dashboard', $consolidatedData);
            $this->load->view('module/include/footer');
        }
    }
?>