<?php

/**
 * Created by PhpStorm.
 * User: Tonkoff
 * Date: 6/15/2017
 * Time: 4:29 PM
 */
class Form extends CI_Controller
{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('collections/Form_model');
        }

        public function index()
        {
            $viewData = array();

            $formResults = $this->Form_model->get_all();

            $viewData['formResults'] = $formResults;

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/form/list', $viewData);
            $this->load->view('admin/footer');
        }

        public function  done() {

            if(!isset($_GET['id'])) {
                redirect(base_url('index.php/admin/form'));
            }


            $form = $this->Form_model->get_one($_GET['id']);

            if(empty($form)) {
                redirect(base_url('index.php/form'));
            }

            $data = array(
                'id'          => $form[0]->id,
                'name'        => $form[0]->name,
                'email'       => $form[0]->email,
                'phone'       => $form[0]->phone,
                'message'     => $form[0]->message,
                'subject'     => $form[0]->subject,
                'status'      => 'done',

            );

            $this->db->update('contacts', $data, array('id'=> $_GET['id']));
            redirect(base_url('index.php/admin/form'));

        }

        public function delete()  {
            if(!isset($_GET['id'])) {
                redirect(base_url('index.php/admin/form'));
            }

            $form = $this->Form_model->get_one($_GET['id']);

            if(empty($form)) {
                redirect(base_url('index.php/admin/form'));
            }

            $this->db->delete('contacts', array('id'=> $_GET['id']));
            redirect(base_url('index.php/admin/form'));
        }
}