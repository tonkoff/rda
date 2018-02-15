<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('collections/Users_model');
    }


    public function index()
    {


        if(isset($_POST['submit'])) {
            if(strlen($_POST['username']) <5 || strlen($_POST['username']) > 50) {
                $errors['credentials'] = 'Wrong Credentials';
            }

            if(strlen($_POST['password']) <5 || strlen($_POST['password']) > 50) {
                $errors['credentials'] = 'Wrong Credentials';
            }

            if(empty($errors)) {
                $user = $this->Users_model->get_login_user(trim($_POST['username']));

                if(!empty($user)) {
                    if($user[0]->password == sha1(trim($_POST['password']))) {



                        $newdata = array(
                            'username'  =>  $user[0]->username ,
                            'email'     =>  $user[0]->email,
                            'logged_in' => TRUE
                        );
                        $this->session->set_userdata('user',$newdata);
                        redirect(base_url('index.php/admin'));
                    } else {
                        $errors[] = 'Wrong credentials';
                    }
                }   else {
                    $errors[] = 'Wrong credentials';
                }
            }
        }

        if($this->is_logged->is_logged_in()) {
            redirect(base_url('index.php/admin'));
        } else {
            $errors = array();
            $viewData = array();
            $viewData['errors'] = $errors;
            $this->load->view('admin/login/login', $viewData);
        }

    }

    public function logout() {

        $this->session->sess_destroy();
        unset(
            $_SESSION['user']

        );


        redirect(base_url('index.php/admin/login'));
    }
}