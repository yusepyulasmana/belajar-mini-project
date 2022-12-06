<?php
class Student_model extends CI_Model 
{
    public function get_all()
    {
        $querry = $this->db->get('students');
        $result = $querry->result();
        return $result;
    }

    public function get_item($id)
    {
        $this->db->where('id', $id);
        $querry = $this->db->get('students');
        $result = $querry->row();
        return $result;
    }

    public function create_item() 
    {
        $data['fullname']          = $this->input->post('fullname');
        $data['nis']              = $this->input->post('nis');
        $data['gender']           = $this->input->post('gender');

        $this->db->insert('students', $data);
    }

    public function update_item($id)
    {
        $data['fullname']           = $this->input->post('fullname');
        $data['nis']                = $this->input->post('nis');
        $data['gender']             = $this->input->post('gender');

        $this->db->where('id', $id);
        $this->db->update('students', $data);
    }

    public function delete_item($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('students');
        $this->session->set_flashdata(['message' =>'Data siswa berhasil dihapus!']);

    }


}