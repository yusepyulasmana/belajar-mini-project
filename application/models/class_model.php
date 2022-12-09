<?php
class Class_model extends CI_Model 
{
    public function get_all()
    {
        $this->db->select('years.year AS year_year,levels.level AS level_level, teams.title AS team_title, classes.id');
        $this->db->from('classes');
        $this->db->join('years','years.id = classes.year_id');
        $this->db->join('levels','levels.id = classes.level_id');
        $this->db->join('teams', 'teams.id = classes.team_id');

       // $this->db->join('students','students.id = groups.student_id');
        //$this->db->join('vocations','vocations.id = groups.vocation_id');
       // $this->db->join('teams','teams.id = groups.team_id');

       
        $querry = $this->db->get();
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
        $data['level_id']         = $this->input->post('level_id');
        $data['team_id']         = $this->input->post('team_id');

        $this->db->insert('classes', $data);
    }

    public function update_item($id)
    {
        $data['year_id']           = $this->input->post('year_id');
        $data['level_id']          = $this->input->post('level_id');
        $data['team_id']          = $this->input->post('team_id');

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
//concat(students.fullname. "//vocations.code. "-", teams.title. "-" ) as group_name