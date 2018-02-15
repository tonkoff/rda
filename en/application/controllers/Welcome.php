<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
        $this->load->model('collections/News_model');
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
                $message = 'www.rda-bg.com/en/index.php/admin/';

                mail($to, $subject, $message);

                redirect(base_url('index.php/welcome'));
            }

        }

	    $viewData = array();
	    $newsResults = $this->News_model->get_last_three();

        $viewData['newsResults'] = $newsResults;

		$this->load->view('topMenu');
		$this->load->view('home/homeView', $viewData);
        $this->load->view('footer');
	}

	public function aboutUs()
    {
        $this->load->view('topMenu');
        $this->load->view('home/aboutUs');
        $this->load->view('footer');
    }
}
