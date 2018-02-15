<?php

/**
 * Created by PhpStorm.
 * User: Tonkoff
 * Date: 6/7/2017
 * Time: 2:18 PM
 */
class OurTeam extends CI_Controller

{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->load->view('topMenu');
            $this->load->view('ourTeam/list');
            $this->load->view('footer');
        }

        public function velizar_petrov()
        {
            $this->load->view('topMenu');
            $this->load->view('ourTeam/velizar_petrov');
            $this->load->view('footer');
        }


    public function aleksander_tonkov()
    {
        $this->load->view('topMenu');
        $this->load->view('ourTeam/aleksander_tonkov');
        $this->load->view('footer');
    }


    public function mariana_hristeva()
    {
        $this->load->view('topMenu');
        $this->load->view('ourTeam/mariana_hristeva');
        $this->load->view('footer');
    }
}