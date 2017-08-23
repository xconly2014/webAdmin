<?php 
class Menu_model extends CI_Model{
    private $db;
    private $table_name = 'menu';
    
    function __construct(){
        parent::__construct();
        $this->db=$this->load->database('master',true);
    }
    
    public function getTopMenu(){
        $sql = "select id,title,bg_img,parent_id from $this->table_name where parent_id = 0 order by id asc";
        return $this->db->query($sql)->result_array();
    }
    
    
    public function getSubMenu(){
        $sql = "select id,title,r_id,parent_id from $this->table_name where parent_id <> 0 order by parent_id asc";
        return $this->db->query($sql)->result_array();
    }
}