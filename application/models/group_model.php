<?php
class Group_model extends CI_Model 
{
    public function get_all()
    {
        
        $this->db->select('students.fullname AS student_fullname, vocations.code AS vocation_code, teams.title AS team_title, groups.id');
        $this->db->from('groups');
        $this->db->join('students','students.id = groups.student_id');
        $this->db->join('vocations','vocations.id = groups.vocation_id');
        $this->db->join('teams','teams.id = groups.team_id');
        
        
        
        $querry = $this->db->get();
        $result = $querry->result();
        return $result;
    }

    public function get_item($id)
    {
        $this->db->where('id', $id);
        $querry = $this->db->get('groups');
        $result = $querry->row();
        return $result;
    }

    public function create_item() 
    {
        $data['student_id']       = $this->input->post('student_id');
        $data['vocation_id']      = $this->input->post('vocation_id');
        $data['team_id']          = $this->input->post('team_id');

        $this->db->insert('groups', $data);

    }

    public function update_item($id)
    {
        $data['student_id']        = $this->input->post('student_id');
        $data['vocation_id']       = $this->input->post('vocation_id');
        $data['team_id']           = $this->input->post('team_id');

        $this->db->where('id', $id);
        $this->db->update('groups', $data);

        $this->session->set_flashdata(['message' =>'Data grup berhasil diedit!']);
    }

    public function delete_item($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('groups');

        $this->session->set_flashdata(['message' =>'Data grup berhasil dihapus!']);

    }
}