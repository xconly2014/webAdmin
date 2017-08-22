<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
    
    function __construct()
    {   
        parent::__construct();
        $this->load->model('User_model');
        
        $islogin = self::checkLogin();
        if(!$islogin){
            redirect(site_url('login/index'));
        }
    }
    
    private function checkLogin(){
        if(empty($_SESSION['user']['userid'])) return false;
        return $_SESSION['user']['userid'];
    }
    
    //用户管理页
	public function index(){
		$data['title'] = '用户管理 - 用户列表';
		
		$result = $this->User_model->getUserList();
		if($result){
		    $data['list'] = $result;
		}
		$this->load->view('userManage/index', $data);
	}

	//新增用户 表单
	public function addUser(){
		$data['title'] = '用户管理 - 新增用户';
        
		$data['group'] = $this->User_model->getGroup();
		$this->load->view('userManage/addUser', $data);
	}
	
	//插入用户
	public function insertUer(){
	    $result = $this->User_model->create($this->input->post('username'),$this->input->post('password'),1);
	    if($result['ack']){
	        exit(json_encode(array('ack' => true, 'msg' => '新增用户成功！')));
	    }else{
	        exit(json_encode(array('ack' => false, 'msg' => '新增用户失败！')));
	    }
		
	}

	//编辑用户组  表单
	public function editUser(){
		$id = $this->input->get('id');
		$data['title'] = '用户管理 - 编辑用户';
		$data['id'] = $id;
		
		$result = $this->User_model -> getUserInfo($id);
		$data['username'] = $result['username'];	
		
		$data['group'] = $this->User_model->getGroup();
		$this->load->view('userManage/editUser', $data);
	}
	
	//修改用户组 ajax
	public function modifyUser(){
	    $uid = $this->input->post('uid');
	    $group_id = $this->input->post('gid');
	    $result = $this->User_model->updateGroup($uid,$group_id);
	    if($result){
	        exit(json_encode(array('ack' => true, 'msg' => '修改成功！')));
	    }else{
	        exit(json_encode(array('ack' => true, 'msg' => '修改失败！')));
	    }
	}
	
	//删除用户
	public function delUser(){
	    $uid = $this->input->post('uid');
	    $result = $this->User_model->update(array('status' => 0),array('id' => $uid));
	    if($result){
	        exit(json_encode(array('ack' => true, 'msg' => '删除成功！')));
	    }else{
	        exit(json_encode(array('ack' => true, 'msg' => '删除失败！')));
	    }
	}
}
