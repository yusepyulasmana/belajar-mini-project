<?php
class Student extends CI_Controller
{
  public function __construct(Type $var = null) {
    parent::__construct();
    $this->load->model('student_model');
  }

  public function index()
  {
      $data['items'] = $this->student_model->get_all();
      $data['page_name'] = 'student/list';
      $data['page_title'] = 'student List';
     
      $this->load->view('main', $data);
  }

  public function create() 
  {
      $data['page_name'] = 'student/form';
      $data['page_title'] = 'create student';

      $this->load->view('main' , $data);
    
  }

  public function create_process() 
  {
    $this->student_model->create_item();
    $this->session->set_flashdata(['message' => ' Data siswa berhasil dibuat!']);
   
    redirect(site_url('student'));
  }

  public function update($id)
  {
    $data['item'] = $this->student_model->get_item($id);
    $data['page_name'] = 'student/form';
    $data['page_title'] = 'update student';
    
    $this->load->view('main', $data);
  }

  public function update_process($id) 
  {
    $this->student_model->update_item($id);
    $this->session->set_flashdata(['message' =>'Data siswa berhasil diedit!']);
    redirect(site_url('student'));
  }


  public function delete_process($id)
    {
      $this->student_model->delete_item($id);
      redirect(site_url('student'));
    }

}


