<?php

class Home extends CI_Controller
{
        public function index()
        {
            $this->load->view('home/inc/header_view');
            $this->load->view('home/home_view');
            $this->load->view('home/inc/footer_view');
        }

        public function register()
        {
            $this->load->view('home/inc/header_view');
            $this->load->view('home/register_view');
            $this->load->view('home/inc/footer_view');
        }
        // public function test()
        // {

//you pass the parameters through the thing or else from the top of it
//you can also do: "order by" || DESC = decendant
            // $this->db->order_by('user_id DESC');
            // //$this->db->where(['user_id' => 2]);
            // $q = $this->db->get('tbl_users');
            // print_r($q->result());
//you pass the parameters through the thing or else from the top of it
            // $q = $this->db->get_where('tbl_users', ['user_id' => 1]);
            // //you can do either a string '' or an array []
            // print_r($q->result());

// GET INFORMATION IN THE DATABASE THROUGH THE CODE
            // $q = $this->db->get('tbl_ºusers');
            // print_r($q->result());

// INSERT INFORMATION IN THE DATABASE THROUGH THE CODE
            // $this->db->insert('tbl_users',[
            //     'user_name' => 'Ganni';
            // ]);

// // UPDATE INFORMATION IN THE DATABASE THROUGH THE CODE
//             $this->db->where (['user_id' => 1]);
//             $this->db->update('tbl_users',[
//                 'user_name' => 'Joseph'
//             ]);

// // DELETE INFORMATION IN THE DATABASE THROUGH THE CODE
//             $this->db->where (['user_id' => 3]);
//             $this->db->delete('tbl_users');


        // }

}
