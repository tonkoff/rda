<?php

/**
 * Created by PhpStorm.
 * User: Tonkoff
 * Date: 6/15/2017
 * Time: 2:53 PM
 */
class ContactUs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('collections/Form_model');
    }

    public function index()
    {
        $errors = array();
        $data = array(
            'name' => '',
            'email' => '',
            'phone' => '',
            'message'=>'',
            'subject' =>'',
            'status' => '',
        );

        if(isset($_POST['submit'])) {
            $data = array(
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'message'=>trim($_POST['message']),
                'subject'=>trim($_POST['subject']),
                'status' => 'new',
            );

            if(strlen(trim($_POST['name'])) <3 || strlen(trim($_POST['name'])) > 30 ) {
                $errors['name'] = 'Invalid name length';
            }

            if(strlen(trim($_POST['email'])) <3 || strlen(trim($_POST['email'])) > 30 ) {
                $errors['email'] = 'Invalid email length';
            }

            if(strlen(trim($_POST['phone'])) <3 || strlen(trim($_POST['phone'])) > 15 ) {
                $errors['phone'] = 'Invalid phone length';
            }
            if(!preg_match("^[+0]\d+^" , $_POST['phone'])) {
                $errors['phone'] = 'Invalid phone';
            }

            if(strlen(trim($_POST['message'])) <10 || strlen(trim($_POST['message'])) > 255 ) {
                $errors['message'] = 'Invalid message length';
            }
            if(strlen(trim($_POST['subject'])) <3 || strlen(trim($_POST['subject'])) > 255 ) {
                $errors['subject'] = 'Invalid subject length';
            }

            if(empty($errors)) {
                $this->db->insert('contacts', $data);

                //mail send

                $to = 'rdaplovdiv@gmail.com';
                $subject = 'Получихте запитване';
                $message = 'www.rda-bg.org/en/index.php/admin/';

                mail($to, $subject, $message);
                redirect(base_url('index.php/contactUs/thank_you'));
            }

        }

        $this->load->view('topMenu');
        $this->load->view('contact/list');
        $this->load->view('footer');
    }

    public function thank_you() {

        $this->load->view('topMenu');
        $this->load->view('contact/thank_you');
        $this->load->view('footer');
    }
}