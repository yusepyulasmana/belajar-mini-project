<?php
class Level extends CI_Controller
{
  public function __construct(Type $var = null) {
    parent::__construct();
    $this->load->model('level_model');
  }

    public function index()
  {
      $data['items'] = $this->level_model->get_all();
      $data['page_name'] = 'level/list';
      $data['page_title'] = 'Level List';
     
      $this->load->view('main', $data);
  }

  public function create() 
  {
      $data['page_name'] = 'level/form';
      $data['page_title'] = 'create Level';

      $this->load->view('main' , $data);
    
  }

  public function create_process() 
  {
    $this->level_model->create_item();
    $this->session->set_flashdata(['message' => ' Data level berhasil dibuat!']);
   
    redirect(site_url('level'));
  }

  public function update($id)
  {
    $data['item'] = $this->level_model->get_item($id);
    $data['page_name'] = 'level/form';
    $data['page_title'] = 'update level';
    
    $this->load->view('main', $data);
  }

  public function update_process($id) 
  {
    $this->level_model->update_item($id);
    $this->session->set_flashdata(['message' =>'Level berhasil diedit!']);
    redirect(site_url('level'));
  }


  public function delete_process($id)
    {
      $this->level_model->delete_item($id);
      redirect(site_url('level'));
    }

}