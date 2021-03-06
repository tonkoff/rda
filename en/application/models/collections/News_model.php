<?php

class News_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get('news');
        return $query->result();
    }

    public function get_all_order()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by('created_at', 'DESC');

        $query = $this->db->get();
        return $query->result();

    }


    public function get_one($id) {
        return $this->db->get_where('news', array('id' => $id)) ->result();
    }

    public function get_last_three()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by('created_at','desc');
        $this->db->limit(3);
        $query = $this->db->get();

        return $query->result();

    }


    public function get_total_rows() {
        return $this->db->count_all('news');
    }



    public function fetch_news($limit, $start) {
        $offset = ($start-1)*$limit;
        $this->db->limit($limit, $offset);
        $this->db->order_by('created_at', 'DESC');

        $query = $this->db->get("news");



        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }


}