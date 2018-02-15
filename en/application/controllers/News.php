<?php

/**
 * Created by PhpStorm.
 * User: Tonkoff
 * Date: 6/15/2017
 * Time: 3:01 PM
 */
class News extends CI_Controller
{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('collections/News_model');
            $this->load->library('pagination');
        }

        public function index()

        {

            $viewData = array();
            //pagination

            $config = array();
            $config['base_url'] = site_url('news/index/');
            $config['total_rows'] = $this->News_model->get_total_rows();
            $config['per_page'] = 6;
            $config['uri_segment'] = 3;
            $config['use_page_numbers'] = TRUE;


            $this->pagination->initialize($config);

            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;




            $viewData['newsResults'] =  $this->News_model->fetch_news($config['per_page'], $page);
            $viewData['links'] = $this->pagination->create_links();


            //$newsResults = $this->News_model->get_all();
            //$viewData['newsResults'] = $newsResults;

            $this->load->view('topMenu');
            $this->load->view('news/list' , $viewData);
            $this->load->view('footer');
        }






        public function single()
        {
            $viewData = array();


//            if(!isset($_GET['id'])) {
//                redirect(base_url('index.php/news'));
//            }

            $news = $this->News_model->get_one($_GET['id']);


            if(empty($news)) {
                redirect(base_url('index.php/news'));
            }

            $viewData['news'] = $news;


            $this->load->view('news/single', $viewData);
            $this->load->view('footer');
        }
}