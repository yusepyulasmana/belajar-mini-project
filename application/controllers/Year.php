<?php
class Year extends CI_Controller
{
  public function __construct(Type $var = null) {
    parent::__construct();
    $this->load->model('year_model');
  }

    public function index()
  {
      $data['items'] = $this->year_model->get_all();
      $data['page_name'] = 'year/list';
      $data['page_title'] = 'Year List';
     
      $this->load->view('main', $data);
  }

  public function create() 
  {
      $data['page_name'] = 'year/form';
      $data['page_title'] = 'create Year';

      $this->load->view('main' , $data);
    
  }

  public function create_process() 
  {
    $this->year_model->create_item();
    $this->session->set_flashdata(['message' => ' Data tapel berhasil dibuat!']);
   
    redirect(site_url('year'));
  }

  public function update($id)
  {
    $data['item'] = $this->year_model->get_item($id);
    $data['page_name'] = 'year/form';
    $data['page_title'] = 'update year';
    
    $this->load->view('main', $data);
  }

  public function update_process($id) 
  {
    $this->year_model->update_item($id);
    $this->session->set_flashdata(['message' =>'Tahun pelajaran berhasil diedit!']);
    redirect(site_url('year'));
  }

  public function delete_process($id)
    {
      $this->year_model->delete_item($id);
      redirect(site_url('year'));
    }

}