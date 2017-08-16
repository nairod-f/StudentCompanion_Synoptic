<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function login()
    {
        $login = $this->input->post('user_name');
        $password = $this->input->post('user_password');

        $result = $this->user_model->get([
            'user_name' =>  $login,
            'user_password' =>  $password
        ]);
        $this->output->set_content_type('application_json');

        if ($result) {
            $this->session->set_userdata(['user_id' => $result[0]['user_id']]);
            $this->output->set_output(json_encode(['result' => 1]));
            return false;
            //if there is a result it will show successful
        }
        $this->output->set_output(json_encode(['result' => 0]));
        //otherwise it is going to return false
    }
}

//     public function get()
//     {
//         $data = $this->user_model->get(1);
//         print_r($data);
//     }
//
//     public function insert()
//     {
//         $result = $this->user_model->insert([
//             'user_name' => 'John Smith'
//         ]);
//         print_r($result);
//     }
//
//     public function update()
//     {
//         $result = $this->user_model->update([
//             'user_name' => 'Peggy Green'
//         ], 2);
//         print_r($result);
//         }
//
//     public function delete()
//     {
//         $result = $this->user_model->delete(40);
//         print_r($result);
//     }
//
// }
