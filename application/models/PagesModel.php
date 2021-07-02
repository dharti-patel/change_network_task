<?php
class PagesModel extends CI_Model{
    
    public function get_pages(){
        $query = $this->db->get("pages");
        return $query->result();
    }
	
    public function insert_page($uploadPageData)
    {    
        return $this->db->insert_batch('pages', $uploadPageData);
    }
    
}
?>