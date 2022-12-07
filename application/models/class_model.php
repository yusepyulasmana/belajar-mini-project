<?php
class Class_model extends CI_Model 
{
    public function get_all()
    {
        $querry = $this->db->get('classes');
        $result = $querry->result();
        return $result;
    }

    public function get_item($id)
    {
        $this->db->where('id', $id);
        $querry = $this->db->get('classes');
        $result = $querry->row();
        return $result;
    }

    public function create_item() 
    {
        $data['year_id']          = $this->input->post('year_id');
        $data['group_id']         = $this->input->post('group_id');
        $data['level_id']         = $this->input->post('level_id');

        $this->db->insert('classes', $data);
    }

    public function update_item($id)
    {
        $data['year_id']           = $this->input->post('year_id');
        $data['group_id']          = $this->input->post('group_id');
        $data['level_id']          = $this->input->post('level_id');

        $this->db->where('id', $id);
        $this->db->update('classes', $data);
    }

    public function delete_item($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('classes');
        $this->session->set_flashdata(['message' =>'Data siswa berhasil dihapus!']);

    }

}