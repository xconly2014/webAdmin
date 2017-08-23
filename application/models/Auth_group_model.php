<?php 
class Auth_group_model extends CI_Model{
    private $db;
    private $table_name = 'auth_group';
    function __construct(){
        parent::__construct();
        $this->db=$this->load->database('master',true);
    }
    
    public function getGroupList(){
        $sql = "select id,title from $this->table_name where status = 1 order by id asc ";
        
        $data = $this->db->query($sql)->result_array();
        return empty($data)? '': $data;
    }
}