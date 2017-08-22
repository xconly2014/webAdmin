<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Auth_model');
        
        if(empty($_SESSION['user']['userid'])) return false;
        $uid = $_SESSION['user']['userid'];
        
        if(!$uid){
            redirect(site_url('login/index'));
        }
        
        if(!$this->Auth_model->check($this->uri->segment(1).'/'.$this->uri->segment(2),
            $uid,
            $type = 1,
            $mode='url',
            $relation='or')){
                echo '您没有访问权限';exit;
        }
        
    }
}