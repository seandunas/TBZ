<?php

    class Users extends My_Controller {
        //constructor
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

//=======================================================================

        //main function using views
        public function index(){
            //$un = $this->uri->segment(3);         
            $data = array(
                'title' => "Home",
            );
            //print_r($data); die();
            $this->load->view('module/include/header',$data);
            $this->load->view('module/dashboard');
            $this->load->view('module/include/footer');
        }

//=======================================================================


        // VIEW TAB PER USER                        // FOR USER PROFILE - testing
        // public function view(){
        //     $id = $this->uri->segment(3);
        //     $data = array(
        //         'title' => "User List",
        //         'services' => $this->user_model->getItemById('tblservicelist','service_id',$id)
        //     );
        //     $this->load->view('module/include/header', $data);
        //     $this->load->view('module/userView');
        //     $this->load->view('module/include/footer');
        // }

    
//=======================================================================
        
        // VIEW FOR LIST OF SERVICES                            //WORKING
        public function serviceList(){
            //$this->load->library('pagination');
            $serviceperpage = 5;
            $serviceconfig = [
                'base_url' => base_url()."index.php/users/servicelist",
                'total_rows' => $this->user_model->getTotalRows_service(),
                'per_page' => $serviceperpage,
                'full_tag_open' => '<nav aria-label="page navigation"> <ul class="pagination">',
                'full_tag_close' => '</ul></nav>',
                'first_tag_open' => '<li>',
                'first_tag_close' => '</li>',
                'last_tag_open' => '<li>',
                'last_tag_close' => '</li>',
                'next_tag_open' => '<li>',
                'next_tag_close' => '</li>',
                'prev_tag_open' => '<li>',
                'prev_tag_close' => '</li>',
                'cur_tag_open' => '<li class="active"><a href="#">',
                'cur_tag_close' => '</a></li>',
                'num_tag_open' => '<li>',
                'num_tag_close' => '</li>',
            ];

            $this->pagination->initialize($serviceconfig);
            //$this->load->library('form_validation');
            $data2 = array(
                'title' => "Service List",
                'services' => $this->user_model->get_items2_limit_offset_service($serviceperpage,$this->uri->segment(3)),
                'linksServices' => $this->pagination->create_links()
            );
            //print_r($data2); die();
            $this->load->view('module/include/header', $data2);
            $this->load->view('module/services');
            $this->load->view('module/include/footer');
        }

        
//=======================================================================
        public function userview(){
            $data2 = array(
                'title' => "User Profile",
            ); 
            $queryResult['user'] = $this->user_model->getcurrentuser($this->session->userdata('current_user'));
            echo $queryResult;
            // $this->load->view('module/include/header', $data2);
            // $this->load->view('module/userView', $queryResult);
            // $this->load->view('module/include/footer');
        }
        // VIEW FOR LIST OF USERS
        public function userList(){                             //WORKING
            //$this->load->library('pagination');
            $perpage = 5;
            $config = [
                'base_url' => base_url()."index.php/users/userlist",
                'total_rows' => $this->user_model->getTotalRows_user(),
                'per_page' => $perpage,
                'full_tag_open' => '<nav aria-label="page navigation"> <ul class="pagination">',
                'full_tag_close' => '</ul></nav>',
                'first_tag_open' => '<li>',
                'first_tag_close' => '</li>',
                'last_tag_open' => '<li>',
                'last_tag_close' => '</li>',
                'next_tag_open' => '<li>',
                'next_tag_close' => '</li>',
                'prev_tag_open' => '<li>',
                'prev_tag_close' => '</li>',
                'cur_tag_open' => '<li class="active"><a href="#">',
                'cur_tag_close' => '</a></li>',
                'num_tag_open' => '<li>',
                'num_tag_close' => '</li>',
            ];

            $this->pagination->initialize($config);
            $data = array(
                'title' => "Users List",
                'users' => $this->user_model->get_items_limit_offset_user($perpage,$this->uri->segment(3)),
                'links' => $this->pagination->create_links(),
            );
            //print_r($data); die();
            $this->load->view('module/include/header', $data);
            $this->load->view('module/users');
            $this->load->view('module/include/footer');
        }

//=======================================================================

            //ADD SERVICE TAB
            public function addItem(){      
                $this->load->library('form_validation');
                // $data = array(
                //     'title' => "Add User",
                //     //'errors' => $error,
                // );
                $this->load->view('module/include/header');
                $this->load->view('module/services');
                $this->load->view('module/include/footer');
            }

//=======================================================================

        public function insertItem(){   //WORKING except FORM VALIDATION

            //print_r($_POST); die(); debugging
            //$this->load->library('form_validation');
            $this->form_validation->set_rules('s_name', 'SERVICE NAME', 'required');
            $this->form_validation->set_rules('s_desc', 'DESCRIPTION NAME', 'required');
            $this->form_validation->set_rules('s_price', 'PRICE', 'required');
            $this->form_validation->set_rules('s_category','CATEGORY','required');

            if ($this->form_validation->run() == FALSE){
                //print_r($_POST); die();
                $this->servicelist();
            } else {
                $this->user_model->insertItem([
                    'service_name'            => $this->input->post('s_name', true),
                    'service_desc'            => $this->input->post('s_desc', true),
                    'service_price'           => $this->input->post('s_price', true),
                    'service_category'        => $this->input->post('s_category', true)
                ]);
        
                    redirect("users/servicelist");
                }
        }
//=======================================================================
        
        public function editUser(){                             //WORKING
            $id = $this->uri->segment(3);
            $data = array(
                'title' => "User Details",
                'items' => $this->user_model->getItemById('tbluserlist','user_id',$id)
            );

            parent::create_page('updateuser', $data);
        }

//=======================================================================

        //receiver of edit method
        public function updateUser(){                           //WORKING except form validation
            $id = $this->uri->segment(3);

            $this->load->library('form_validation');
            $this->form_validation->set_rules('u_contactno', 'CONTACT NUMBER', 'required|is_natural');
            $this->form_validation->set_rules('u_username','USERNAME','required|alpha_numeric|is_unique[tbluserlist.user_username]');
            $this->form_validation->set_rules('u_password', 'PASSWORD', 'required|min_length[6]');
            $this->form_validation->set_rules('cpsw', 'CONFIRM PASSWORD', 'required|min_length[6]|matches[u_password]');

            if ($this->form_validation->run() == FALSE){
                redirect(base_url()."index.php/users/edituser/$id");
            } else {

                $data = [
                    'user_fname'            => $this->input->post('u_fname', true),
                    'user_lname'            => $this->input->post('u_lname', true),
                    'user_bday'             => $this->input->post('u_bday', true),
                    'user_contactno'        => $this->input->post('u_contactno', true),
                    'user_email'            => $this->input->post('u_email', true),
                    'user_username'         => $this->input->post('u_username', true),
                    'user_password'         => $this->input->post('u_password', true),
                ];
                $this->user_model->updateUser($data, $id);
            }
            redirect("users/userlist");
        }
        
//=======================================================================

        public function editService(){                          //FOR UPDATE  -- CREATE ANOTHER VIEW (updateService)
            $id = $this->uri->segment(3);
            $data = array(
                'title' => "List",
                'items' => $this->user_model->getItemById('tblservicelist','service_id',$id)
            );

            parent::create_page('updateService', $data);
        }

//=======================================================================

        //receiver of edit method
        public function updateService(){                        //FOR UPDATE
            $id = $this->uri->segment(3);

            $this->load->library('form_validation');
            $this->form_validation->set_rules('s_name', 'SERVICE NAME', 'required');
            $this->form_validation->set_rules('s_desc','DESCRIPTION','required');
            $this->form_validation->set_rules('s_price', 'PRICE', 'required');
            $this->form_validation->set_rules('s_category', 'CATEGORY', 'required');

            if ($this->form_validation->run() == FALSE){
                redirect(base_url()."index.php/users/editservice/$id");
            } else {

                $data = [
                    'service_name'            => $this->input->post('s_name', true),
                    'service_desc'            => $this->input->post('s_desc', true),
                    'service_price'           => $this->input->post('s_price', true),
                    'service_category'        => $this->input->post('s_category', true)
                ];
                $this->user_model->updateService($data, $id);
            }
            redirect("users/servicelist");
        }
        
//=======================================================================

        public function deleteUser(){                       //FOR UPDATE
            $id = $this->uri->segment(3);
            $this->user_model->deleteUser($id);
            redirect("users/userlist");
        }

//=======================================================================

        public function deleteService(){                    //FOR UPDATE
            $id = $this->uri->segment(3);
            $this->user_model->deleteService($id);
            redirect("users/servicelist");
        }

//=======================================================================

        public function logout(){                           //WORKING
            $this->session->sess_destroy();
            redirect('login');
        }
//=======================================================================
    }
?>