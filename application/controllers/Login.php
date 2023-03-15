<?php           /////////// ALL CODES BELOW ARE WORKING

class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model',null,true);
        $this->load->model('login_model',null,true);
        $this->load->library('session');

        if($this->session->has_userdata('is_logged')){
            redirect("users");
        }
    }

//=======================================================================

    public function index(){
        $data = array(
            'title' => "Login Page"
        );
        $this->load->view('login/include/header', $data);
        $this->load->view('login/login');
        $this->load->view('login/include/footer');
    }

//=======================================================================

    public function authenticate(){
        $user = $this->input->post('username');
        $pass = $this->input->post('userpass');

        if($userInfo = $this->login_model->authenticateCredentials($user, $pass)){
            $this->session->is_logged = true;

            // $data = [
            //     'results' => $this->login_model->getCurrentUser($user),
            // ];

            // //print_r($data); die();
            // $this->load->view('module/include/header',$data);
            // $this->load->view('module/dashboard');
            // $this->load->view('module/include/footer');         
            
            redirect("users");

        }else{
            $this->session->set_flashdata('is_logged_error',true);
            redirect("login");
        }
    }

//=======================================================================

    public function register(){
        $data = array(
            'title' => "Registration Page"
        );
        $this->load->view('login/include/header', $data);
        $this->load->view('login/register');
        $this->load->view('login/include/footer');
    }

//=======================================================================

    public function registerUser(){

        //FILE UPLOADING
        $this->load->library('upload');
        $config = [
            'upload_path'   => './uploads/',
            'allowed_types' => "gif|jpeg|png|jpg", 
        ];
        $this->upload->initialize($config);

        //FORM VALIDATION
        $this->form_validation->set_rules('u_fname', 'FIRST NAME', 'required|alpha');
        $this->form_validation->set_rules('u_lname', 'LAST NAME', 'required|alpha');
        $this->form_validation->set_rules('u_bday', 'BIRTH DATE', 'required');
        $this->form_validation->set_rules('u_contactno', 'CONTACT NUMBER', 'required|is_natural');
        $this->form_validation->set_rules('u_email','EMAIL','required|valid_email|is_unique[tbluserlist.user_email]');
        $this->form_validation->set_rules('u_username','USERNAME','required|alpha_numeric|is_unique[tbluserlist.user_username]');
        $this->form_validation->set_rules('u_password', 'PASSWORD', 'required|min_length[6]');
        $this->form_validation->set_rules('cpsw', 'CONFIRM PASSWORD', 'required|min_length[6]|matches[u_password]');

        // print_r($_POST); die();

        if ($this->form_validation->run() == FALSE){
            // print_r($_POST); die();
            $this->register();
        } else {
            if (!$this->upload->do_upload('u_avatar')){

                $error = array('error' => $this->upload->display_errors());
            // print_r($error); die();

                $this->register($error);
            } else {

                $this->load->library('image_lib'); //FOR IMAGE MANIPULATIONS
                $imageName = $this->upload->data('file_name');
                $configImageManip = [
                    'image_library' => "gd2",
                    'source_image'  => "./uploads/$imageName",
                    'create_thumb'  => TRUE,
                    'maintain_ratio' => FALSE,
                    'width'         => 100,
                    'height'        => 100,
                ];

                $this->load->library('image_lib',$configImageManip);
                $this->image_lib->resize();
                //print_r($_POST); die(); //debugging
                $this->login_model->insertRegisterUser([
                    'user_fname'            => $this->input->post('u_fname', true),
                    'user_lname'            => $this->input->post('u_lname', true),
                    'user_bday'             => $this->input->post('u_bday', true),
                    'user_contactno'        => $this->input->post('u_contactno', true),
                    'user_email'            => $this->input->post('u_email', true),
                    'user_username'         => $this->input->post('u_username', true),
                    'user_password'         => $this->input->post('u_password', true),
                    'user_avatar'           => $imageName
                ]);

                redirect("login");
            }
        }
    }

//=======================================================================

    // public function transferUserdata(){
    //     $user = $this->input->post('username');
    //     $userdata = array(
    //         'userdata' => $this->login_model->getItemByUsername('tbluserlist','user_username',$user)
    //     );

    //     echo 'pre';
    //     print_r($userdata); die();

    //         $this->load->view('module/include/header',$userdata);
    //         $this->load->view('module/dashboard');
    //         $this->load->view('module/include/footer');
    // }

}

?>