<?php
class Classes extends CI_Controller 
{
    public function __construct(Type $var = null) {
    parent::__construct();
    $this->load->model('class_model');

    }
   
    public function index() 
    {
        $data['items']              = $this->class_model->get_all();
        $data['page_name']          = 'classes/list';
        $data['page_title']         = 'Classes List';
        
        $this->load->view('main', $data);

    }

    public function create()
    { 
        $data['page_name']      = 'classes/form';
        $data['page_title']     = 'create classes';

        $this->load->view('main', $data);
        
    }

    public function create_process()
    {
        $this->class_model->create_item();
        $this->session->set_flashdata(['message' =>' Kelas berhasil dibuat!']);

        redirect(site_url('classes'));
    }

    public function update($id)
    {
        $data['item']       = $this->class_model->get_item($id);
        $data['page_name']  = 'classes/form';
        $data['page_title'] = 'update classes';

        $this->load->view('main', $data);
    }

    public function update_process($id)
    {
        $this->class_model->update_item($id);
        $this->session->set_flashdata(['message' =>'Kelas berhasil diedit!']);

        redirect(site_url('classes'));
    }

    public function delete_process($id)
    {
        $this->class_model->delete_item($id);
        redirect(site_url('classes'));
    }
}