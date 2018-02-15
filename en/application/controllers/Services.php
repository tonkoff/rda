<?php

/**
 * Created by PhpStorm.
 * User: Tonkoff
 * Date: 6/7/2017
 * Time: 12:02 PM
 */
class Services extends CI_Controller
{

      public function __construct()
      {
          parent::__construct();
      }



      public function index()
      {
        $this->load->view('topMenu');
        $this->load->view('services/list');
        $this->load->view('footer');
      }


      public function trainings()
      {
          $this->load->view('topMenu');
          $this->load->view('services/trainings');
          $this->load->view('footer');
      }

      public function projects()
      {
          $this->load->view('topMenu');
          $this->load->view('commingSoon');
          $this->load->view('footer');
      }

      public function consulting()
      {
          $this->load->view('topMenu');
          $this->load->view('services/consulting');
          $this->load->view('footer');
      }

      public function information()
      {
          $this->load->view('topMenu');
          $this->load->view('services/information');
          $this->load->view('footer');
      }

      public function support()
      {
          $this->load->view('topMenu');
          $this->load->view('services/support');
          $this->load->view('footer');
      }

      public function services()
      {
          $this->load->view('topMenu');
          $this->load->view('services/services');
          $this->load->view('footer');
      }


}