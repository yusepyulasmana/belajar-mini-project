<?php
class Student extends CI_Controller
{
   
  public function index()
  {
      
      $data['page_name'] = 'student/list';
      $data['page_title'] = 'Student List';
     
      echo "aku index";
   
  }
  public function create() 
  {
      $data['page_name'] = 'student/form';
      $data['page_title'] = 'create Student';

    
  }


























}


