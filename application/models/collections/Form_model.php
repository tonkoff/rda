<?php

/**
 * Created by PhpStorm.
 * User: Tonkoff
 * Date: 6/26/2017
 * Time: 3:16 PM
 */
class Form_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('contacts');

        return $query->result();
    }


    public function get_one($id)
    {
        $query = $this->db->get_where('contacts', array('id'=> $id));
        return $query->result();
    }


}