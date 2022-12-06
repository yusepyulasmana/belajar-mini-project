<?php
class Team_model extends CI_Model 
{
    public function get_all()
    {
        $querry = $this->db->get('teams');
        $result = $querry->result();
        return $result;
    }

    public function get_item($id)
    {
        $this->db->where('id', $id);
        $querry = $this->db->get('teams');
        $result = $querry->row();
        return $result;
    }

    public function create_item() 
    {
        $data['title']          = $this->input->post('title');
        
        $this->db->insert('teams', $data);
    }

    public function update_item($id)
    {
        $data['title']          = $this->input->post('title');
        

        $this->db->where('id', $id);
        $this->db->update('teams', $data);
    }

    public function delete_item($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('teams');
        $this->session->set_flashdata(['message' =>'Data kelas berhasil dihapus!']);

    }


}