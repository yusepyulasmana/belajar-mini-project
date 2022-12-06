<?php
class Level_model extends CI_Model 
{
    public function get_all()
    {
        $querry = $this->db->get('levels');
        $result = $querry->result();
        return $result;
    }

    public function get_item($id)
    {
        $this->db->where('id', $id);
        $querry = $this->db->get('levels');
        $result = $querry->row();
        return $result;
    }

    public function create_item() 
    {
        $data['level']  = $this->input->post('level');
        
        $this->db->insert('levels', $data);
    }

    public function update_item($id)
    {
        $data['level']  = $this->input->post('level');
        

        $this->db->where('id', $id);
        $this->db->update('levels', $data);
    }

    public function delete_item($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('levels');
        $this->session->set_flashdata(['message' =>'Data level berhasil dihapus!']);
    }
}