<?php
class Vocation extends CI_Controller
{
  public function __construct(Type $var = null) {
    parent::__construct();
    $this->load->model('vocation_model');
    if (empty($this->session->user_id))
    {
      redirect('auth/login');
    }
  }

    public function index()
  {
      $data['items'] = $this->vocation_model->get_all();
      $data['page_name'] = 'vocation/list';
      $data['page_title'] = 'Vocation List';
     
      $this->load->view('main', $data);
  }

  public function create() 
  {
      $data['page_name'] = 'vocation/form';
      $data['page_title'] = 'create Vocation';

      $this->load->view('main' , $data);
    
  }

  public function create_process() 
  {
    $this->vocation_model->create_item();
    $this->session->set_flashdata(['message' => ' Data Kejuruan berhasil dibuat!']);
   
    redirect(site_url('vocation'));
  }

  public function update($id)
  {
    $data['item'] = $this->vocation_model->get_item($id);
    $data['page_name'] = 'vocation/form';
    $data['page_title'] = 'update vocation';
    
    $this->load->view('main', $data);
  }

  public function update_process($id) 
  {
    $this->vocation_model->update_item($id);
    $this->session->set_flashdata(['message' =>'Kejuruan berhasil diedit!']);
    redirect(site_url('vocation'));
  }


  public function delete_process($id)
    {
      $this->vocation_model->delete_item($id);
      redirect(site_url('vocation'));
    }

}