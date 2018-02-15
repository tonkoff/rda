<?php

/**
 * Created by PhpStorm.
 * User: Tonkoff
 * Date: 6/15/2017
 * Time: 11:06 AM
 */
class RegionalDevelopment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('topMenu');
        $this->load->view('regionalDevelopment/list');
        $this->load->view('footer');
    }

    public function regional()
    {
        $this->load->view('topMenu');
        $this->load->view('regionalDevelopment/regional');
        $this->load->view('footer');
    }

    public function municipal()
    {
        $this->load->view('topMenu');
        $this->load->view('regionalDevelopment/municipal');
        $this->load->view('footer');
    }


}