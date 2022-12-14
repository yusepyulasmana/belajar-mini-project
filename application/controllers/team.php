<?php
class Team extends CI_Controller
{
  public function __construct(Type $var = null) {
    parent::__construct();
    $this->load->model('team_model');
    if (empty($this->session->user_id))
    {
      redirect('auth/login');
    }
  }

    public function index()
  {
      $data['items'] = $this->team_model->get_all();
      $data['page_name'] = 'team/list';
      $data['page_title'] = 'Team List';
     
      $this->load->view('main', $data);
  }

  public function create() 
  {
      $data['page_name'] = 'team/form';
      $data['page_title'] = 'create Team';

      $this->load->view('main' , $data);
    
  }

  public function create_process() 
  {
    $this->team_model->create_item();
    $this->session->set_flashdata(['message' => ' Data Kelas berhasil dibuat!']);
   
    redirect(site_url('team'));
  }

  public function update($id)
  {
    $data['item'] = $this->team_model->get_item($id);
    $data['page_name'] = 'team/form';
    $data['page_title'] = 'update team';
    
    $this->load->view('main', $data);
  }

  public function update_process($id) 
  {
    $this->team_model->update_item($id);
    $this->session->set_flashdata(['message' =>'Kelas berhasil diedit!']);
    redirect(site_url('team'));
  }


  public function delete_process($id)
    {
      $this->team_model->delete_item($id);
      redirect(site_url('team'));
    }

}


