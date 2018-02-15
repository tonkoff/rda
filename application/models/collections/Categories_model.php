<?php

class Categories_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_categories()
    {
        $query = $this->db->get('categories');
        return $query->result();
    }

    public function get_one($id)
    {
        $query = $this->db->get_where('categories', array('id'=> $id));
        return $query->result();
    }

    public function get_total_rows()
    {
        return $this->db->count_all('categories');
    }

    public function fetch_categories($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('categories');

        if($query->num_rows() > 0 ) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
}