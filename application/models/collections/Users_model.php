<?php


class Users_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }


    public function get_users()
    {
        $query = $this->db->get('users');
            return $query->result();
    }

    public function get_one($id)
    {
        $query = $this->db->get_where('users', array('id'=> $id));
        return $query->result();
    }

    public function get_login_user($username)
    {
       $query = $this->db->get_where('users', array('username'=> $username));
       return $query->result();
    }


    public function get_total_rows()
    {
        return $this->db->count_all('users');
    }

    public function fetch_users($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("Users");


        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
}
