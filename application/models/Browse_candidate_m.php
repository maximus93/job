<?php
class Browse_candidate_m extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function record_count() {
        return $this->db->count_all("resume");
    }

    public function fetch_resume($limit, $start) {
        $this->db->select('*');
        $this->db->from('resume');
        $this->db->join('users', 'users.user_id = resume.user_id');
        //$this->db->where('list_id', $id);
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
   }

   public function fetch_uniqu_skills(){
        $this->db->select("skills");
        $this->db->from("resume");
        $query = $this->db->get();
        return $query->result();
   }
}
?>