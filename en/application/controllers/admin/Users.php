<?php

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('collections/Users_model');
//        $this->load->library('pagination');

        if(!$this->is_logged->is_logged_in()) {
            redirect(base_url('index.php/admin/login/'));
        }
    }


    public function index()
    {

//        $config = array();
//        $config["base_url"] = site_url('users/index');
//        $config["total_rows"] = $this->Users_model->get_total_rows();
//        $config["per_page"] = 5;
//        $config["uri_segment"] = 3;
//        $config['use_page_numbers'] = TRUE;
//
//        $this->pagination->initialize($config);
//
//        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//        $data["users"] = $this->Users_model->fetch_users($config["per_page"], $page);
//
//        $data["links"] = $this->pagination->create_links();
//          $data["links"] ='';

        $data['users'] = $this->Users_model->get_users();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/users/list', $data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $viewData = array();
        $errors = array();
        $data = array(
            'username' => '',
            'password' => '',
            'repeatPassword' => '',
            'email'    => '',
            'description' => '',
        );
        if(isset($_POST['submit'])) {
            $data = array(
                'username' => $_POST['username'],
                'password' => sha1(trim($_POST['password'])),
                'repeatPassword' => sha1(trim($_POST['repeatPassword'])),
                'email'    => $_POST['email'],
                'description' => $_POST['description'],
            );
            //Podavame dannite na funkciq
            // validate za da moje tq da gi proveri
            // i da ni vurne masiv s greshki ako ima takiva.
            // Ako nqma greshki vrushta prazen masiv.
            //$errors = $this->validate($data);

            if(trim($data['password']) !=   trim($data['repeatPassword'])) {
                 $errors['pass'] = 'Passwords must be the same';
            }


           

            if (empty($errors)) {

                unset($data['repeatPassword']);
                $this->db->insert('users', $data);
                redirect(base_url('index.php/admin/users'));
            }
        }

        $viewData['data'] =  $data;
        $viewData['errors'] = $errors;

        $this->load->view('/admin/header');
        $this->load->view('/admin/sidebar');
        $this->load->view('/admin/users/insert', $viewData);
        $this->load->view('/admin/footer');
    }

    public function delete()
    {
        if(!isset($_GET['id'])) {
            $_SESSION['message']['warning'] = 'Something went wrong';
            redirect(base_url('index.php/admin/users'));
            die;
        }
        $this->db->delete('users', array('id'=> $_GET['id']));
        $_SESSION['message']['success'] = 'User was deleted.';
        redirect(base_url('index.php/admin/users'));
        die;
    }

    public function update()
    {
        if(!isset($_GET['id'])) {
            redirect(base_url('index.php/admin/users'));
            die;
        }
        $viewData = array();
        $user = $this->Users_model->get_one($_GET['id']);

        if(empty($user)) {
            redirect(base_url('index.php/admin/users'));
            die;
        }

        $data = array(
            'id'          => $user[0]->id,
            'username'    => $user[0]->username,
            'email'       => $user[0]->email,
            'description' => $user[0]->description,

        );

        if(isset($_POST['submit'])) {
            $data = array(
                'username'    => $_POST['username'],
                'email'       => $_POST['email'],
                'description' => $_POST['description'],
            );

            $this->db->update('users', $data, array('id'=> $_GET['id']));
            redirect(base_url('index.php/admin/users'));
            die;

        }


        $viewData['data'] = $data;
        $this->load->view('/admin/header');
        $this->load->view('/admin/sidebar');
        $this->load->view('/admin/users/update', $viewData);
        $this->load->view('/admin/footer');


    }
}


