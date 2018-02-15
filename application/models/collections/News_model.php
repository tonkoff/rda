<?php

class News_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get('news_bg');
        return $query->result();
    }

    public function get_one($id) {
        return $this->db->get_where('news_bg', array('id' => $id)) ->result();
    }

    public function get_last_three()
    {
        $this->db->select('*');
        $this->db->from('news_bg');
        $this->db->order_by('created_at','desc');
        $this->db->limit(3);
        $query = $this->db->get();

        return $query->result();

    }


    public function get_total_rows() {
        return $this->db->count_all('news_bg');
    }



    public function fetch_news($limit, $start) {
        $offset = ($start-1)*$limit;
        $this->db->limit($limit, $offset);
        $this->db->order_by('created_at', 'DESC');

        $query = $this->db->get("news_bg");



        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }


}