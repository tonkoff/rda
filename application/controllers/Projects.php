<?php

/**
 * Created by PhpStorm.
 * User: Tonkoff
 * Date: 6/7/2017
 * Time: 12:40 PM
 */
class Projects extends CI_Controller
{

     public function __construct()
     {
         parent::__construct();
     }

     public function index()
     {
            $this->load->view('topMenu');
            $this->load->view('projects/list');
            $this->load->view('footer');
     }

     public function insights()
     {
         $this->load->view('topMenu');
         $this->load->view('projects/insights');
         $this->load->view('footer');
     }

     public function stob()
     {
         $this->load->view('topMenu');
         $this->load->view('projects/stob');
         $this->load->view('footer');
     }


    public function projectExperience()
    {
        $this->load->view('topMenu');
        $this->load->view('projects/projectExperience');
        $this->load->view('footer');
    }
}