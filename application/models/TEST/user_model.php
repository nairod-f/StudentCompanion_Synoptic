<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    /**
    *   @usage
    *  Single record -  $this->user_model->get(2);
    *  All records   -  $this->user_model->get();
    */
    public function get($user_id = null)
    {
        if($user_id === null) {
            $q =  $this->db->get('tbl_users');
        } elseif(is_array($user_id)) {
            $q = $this->db->get_where('tbl_users', $user_id);
        } else {
            $q = $this->db->get_where('tbl_users', ['user_id' => $user_id]);
        }
        return $q->result_array();
    }

    /*
    *    @usage $result = $this->user_model->insert(['user_name' => 'John Smith']);
    */
    public function test_insert($data)
    {
        $this->db->insert('tbl_users', $data);
        return $this->db->insert_id();
    }

    /*
    *    @usage $result = $this->user_model->update(['user_name'=>'Peggy Green'], 2);
    */

    public function test_update($data, $user_id)
    {
        $this->db->where(['user_id' => $user_id]);
        $this->db->update('tbl_users', $data);
        return $this->db->affected_rows();
    }

    /*
    *    @usage $result =$this->user_model->delete(4);
    */
    public function test_delete($user_id)
    {
        $this->db->delete('tbl_users', ['user_id' => $user_id]);
        return $this->db->affected_rows();

    }

}
