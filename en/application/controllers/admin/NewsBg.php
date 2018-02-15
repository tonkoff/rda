<?php

class NewsBg extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('collections/NewsBg_model');
        //$this->load->library('pagination');

        if(!$this->is_logged->is_logged_in()) {
            redirect(base_url('index.php/admin/login/'));
        }
    }

    public function index()
    {
        $viewData = array();
        //pagination

//        $config = array();
//        $config['base_url'] = site_url('admin/newsBg/index/');
//        $config['total_rows'] = $this->NewsBg_model->get_total_rows();
//        $config['per_page'] = 6;
//        $config['uri_segment'] = 3;
//        $config['use_page_numbers'] = TRUE;
//
//        $this->pagination->initialize($config);
//
//        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
//
//
//
//        $viewData['blogResults'] =  $this->NewsBg_model->fetch_news($config['per_page'], $page);
//        $viewData['links'] = $this->pagination->create_links();




        // var_dump($_SESSION['user']['username']);
       $viewData['links'] = '';
        $blogResults = $this->NewsBg_model->get_all_order();
        $viewData['blogResults'] = $blogResults;


        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/newsBg/list', $viewData);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $errors = array();
        $viewData = array();
        $imageErrors = array();
        $imageName = '';
        $data = array(
            'name' => '',
            'description' => '',
            'image' => '',
            'created_at' => '',
            'user_name' => '',
        );

        if (isset($_POST['submit'])) {

            $data = array(
                'name' => trim($_POST['name']),
                'description' => trim($_POST['description']),
                'image' => $imageName,
                'created_at' => date("Y-m-d H:i:s"),
                'user_name' => $_SESSION['user']['username'],
            );


            if (isset($_FILES['image'])) {
                $imageName = $_FILES['image']['name'];

                $imageType = $_FILES['image']['type'];
                $imageSize = $_FILES['image']['size'];
                $imagePath = $_FILES['image']['tmp_name'];


                $temp = explode('/', $imageType);
                $extension = end($temp);
                $extension = strtolower($extension);
                $imageName = sha1(sha1(time()) . sha1($imageName)) . '.' . $extension;
                $allow = array('gif', 'jpg', 'jpeg', 'png');

                if (!in_array($extension, $allow)) {
                    $imageErrors['extension'] = 'Wrong extension';
                }
                if ($imageSize > 10000000) {
                    $imageErrors['size'] = 'Image is too big!';
                }
            }
            if (empty($errors) && empty($imageErrors)) {
                if (isset($_FILES['image'])) {
                    $data['image'] = $imageName;
                }

                $this->db->insert('news_bg', $data);

                if (isset($_FILES['image'])) {
                    move_uploaded_file($imagePath, '../assets/images/blog/blog' . '/' . $imageName);
                }
                redirect(base_url('index.php/admin/newsBg'));
            }
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/newsBg/insert');
        $this->load->view('admin/footer');

    }



    public function edit() {

    }

    public function delete()
    {
        if(!isset($_GET['id'])) {
            redirect(base_url('index.php/admin/newsBg'));
        }
        $news = $this->NewsBg_model->get_one($_GET['id']);
        $news_image = $news[0]->image;


        if(empty($news)) {
            redirect(base_url('index.php/admin/newsBg'));
        }

        $this->db->delete('news_bg', array('id'=> $_GET['id']));

        unlink("../assets/images/blog/blog/". $news_image);

        $_SESSION['message']['success'] = 'New was deleted';
        redirect(base_url('index.php/admin/newsBg'));
        die;

    }
}