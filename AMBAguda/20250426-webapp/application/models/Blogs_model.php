<?php 

class Blogs_model extends CI_model{

    public function getSome($numrec=0){
        if($numrec == 0){
            $query = $this->db->get('blogs');
        }else {
            $query = $this->db->get('blogs', $numrec);
        }
        
        return $query->result();
    }
}

?>