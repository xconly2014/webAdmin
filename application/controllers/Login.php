<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    private function checkLogin(){
        if(empty($_SESSION['user']['userid'])) return false;
        return $_SESSION['user']['userid'];
    }
    
	public function index()
	{
	    $islogin = self::checkLogin();
	    if($islogin){
	        redirect(site_url('user/index'));
	    }
		$data['title'] = '用户登录';
		
		$this->load->view('login/index', $data);
	}
	
	public function check_login(){
	    $username = $this->input->post('username');
	    $pwd = $this->input->post('password');
	    
	    $this->load->model('User_model');
	    $data = $this-> User_model->checkUser($username,$pwd);
	    
	    if($data['ack']){
	        $info['user'] = array(
	            'userid' => $data['data']['id'],
	            'username' => $data['data']['username']
	        );
	        $this->session->set_userdata($info);
	        exit(json_encode(array('ack' => true,'msg' => '')));
	    }else{
	        exit(json_encode(array('ack' => false,'msg' => $data['msg'])));
	    }
	}
	
	
	public function logout()
	{
		$data['title'] = '退出登录';
		$this->session->sess_destroy();
		redirect(site_url('login/index'));
	}
}