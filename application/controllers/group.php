<?php
class Group extends CI_Controller
{
    function __construct(Type $var = null) {
    parent::__construct();
    $this->load->model('group_model');
    }

    public function index()
    {
        $data['items']          = $this->group_model->get_all();
        $data['page_name']      = 'group/list';
        $data['page_title']     = 'Group List';
     
        $this->load->view('main', $data);
    }

    public function create() 
    {
        $data['page_name']      = 'group/form';
        $data['page_title']     = 'create group';

        $this->load->view('main' , $data);
    }

    public function create_process() 
    {
        $this->group_model->create_item();
        $this->session->set_flashdata(['message' => ' Data grup berhasil dibuat!']);
   
        redirect(site_url('group'));
    }

    public function update($id)
    {
        $data['item']           = $this->group_model->get_item($id);
        $data['page_name']      = 'group/form';
        $data['page_title']     = 'update group';
    
        $this->load->view('main', $data);
    
    }

    public function update_process($id) 
    {
        $this->group_model->update_item($id);
        $this->session->set_flashdata(['message' =>'Data siswa berhasil diedit!']);

        redirect(site_url('group'));
    }

    public function delete_process($id)
    {
        $this->group_model->delete_item($id);
        $this->session->set_flashdata(['message' =>'Data siswa berhasil dihapus!']);

        redirect(site_url('group'));
    }
}


