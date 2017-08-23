<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Auth_model');
        
        $uid = self::checkLogin();       
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
    
    private function checkLogin(){
        if(empty($_SESSION['user']['userid'])) return false;
        return $_SESSION['user']['userid'];
    }
}