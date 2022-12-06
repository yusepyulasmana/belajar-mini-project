<?php
class Vocation_model extends CI_Model 
{
    public function get_all()
    {
        $querry = $this->db->get('vocations');
        $result = $querry->result();
        return $result;
    }

    public function get_item($id)
    {
        $this->db->where('id', $id);
        $querry = $this->db->get('vocations');
        $result = $querry->row();
        return $result;
    }

    public function create_item() 
    {
        $data['name']          = $this->input->post('name');
        $data['code']          = $this->input->post('code');
        
        $this->db->insert('vocations', $data);
    }

    public function update_item($id)
    {
        $data['name']          = $this->input->post('name');
        $data['code']          = $this->input->post('code');
        
        $this->db->where('id', $id);
        $this->db->update('vocations', $data);
    }

    public function delete_item($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('vocations');
        $this->session->set_flashdata(['message' =>'Data kejuruan berhasil dihapus!']);

    }


}