<?php
class Year_model extends CI_Model 
{
    public function get_all()
    {
        $querry = $this->db->get('years');
        $result = $querry->result();
        return $result;
    }

    public function get_item($id)
    {
        $this->db->where('id', $id);
        $querry = $this->db->get('years');
        $result = $querry->row();
        return $result;
    }

    public function create_item() 
    {
        $data['year']  = $this->input->post('year');
        
        $this->db->insert('years', $data);
    }

    public function update_item($id)
    {
        $data['year']  = $this->input->post('year');
        

        $this->db->where('id', $id);
        $this->db->update('years', $data);
    }

    public function delete_item($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('years');
        $this->session->set_flashdata(['message' =>'Data tapel berhasil dihapus!']);

    }


}