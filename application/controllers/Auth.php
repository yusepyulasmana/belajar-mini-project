<?php

class Auth extends CI_Controller
{

    public function login()
    {
        $this->load->view('login');

    }
    public function login_process()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get('users');
        $user = $query->row();

        if (empty($user)) {
            $this->session->set_flashdata(['errors' => 'email atau password anda salah']);
            redirect('auth/login');
        }
        $this->session->set_userdata(['user_id' => $user->id]);  
        redirect('student'); 
    }
    public function logout()
    {

        $this->session->unset_userdata('user_id');
        redirect('auth/login');
    }
}