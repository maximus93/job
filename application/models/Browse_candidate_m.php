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
        $this->db->limit($limit, $start);
        $query = $this->db->get("resume");
        return $query->result();
   }
}
?>