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
            'user_name'     =>  $login,
            'user_password' =>  password_hash ($password, CRYPT_BLOWFISH)
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

    public function register()
    {
        $this->output->set_content_type('application_json');

        $this->form_validation->set_rules('user_name', 'Username', 'required|min_length[4]max_length[30]|is_unique[tbl_users.user_name]');
        $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|is_unique[tbl_users.user_email]');
        $this->form_validation->set_rules('user_password', 'Password', 'required|min_length[4]max_length[20]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[4]max_length[20]');


        //custom message
        // $this->form_validation->set_message('required', 'requireddddddddddddd');
        if ($this->form_validation->run() == false){
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return false;
        }
            $login = $this->input->post('user_name');
            $email = $this->input->post('user_email');
            $password = $this->input->post('user_password');
            $confirm_password = $this->input->post('confirm_password');

            $user_id = $this->user_model->insert([
                'user_name'     =>  $login,
                'user_email'    =>  $email,
                'user_password' =>  password_hash ($password, CRYPT_BLOWFISH)
        ]);
            if ($user_id) {

                $this->session->set_userdata(['user_id' => $user_id]);
                $this->output->set_output(json_encode(['result' => 1]));
                return false;
                //if there is a result it will show successful
        }
        $this->output->set_output(json_encode(['result' => 0, 'error' => 'User Not Created.']));
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
