<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
    
    function __construct()
    {   
        parent::__construct();
        $this->load->model('User_model');
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
	    if($this->input->is_ajax_request()){
	        $result = $this->User_model->create($this->input->post('username'),$this->input->post('password'),1);
	        if($result['ack']){
	            exit(json_encode(array('ack' => true, 'msg' => '新增用户成功！')));
	        }else{
	            exit(json_encode(array('ack' => false, 'msg' => '新增用户失败！')));
	        }
	    }else{
	        $data['title'] = '用户管理 - 新增用户';
	        
	        $data['group'] = $this->User_model->getGroup();
	        $this->load->view('userManage/addUser', $data);
	    }
		
	}

	//编辑用户组  表单
	public function editUser(){
	    if($this->input->is_ajax_request()){
	        $uid = $this->input->post('uid');
	        $group_id = $this->input->post('group_id');
	        $result = $this->User_model->updateGroup($uid,$group_id);
	        if($result){
	            exit(json_encode(array('ack' => true, 'msg' => '修改成功！')));
	        }else{
	            exit(json_encode(array('ack' => true, 'msg' => '修改失败！')));
	        }
	    }else{
	        $id = $this->input->get('id');
	        $data['title'] = '用户管理 - 编辑用户';
	        $data['id'] = $id;
	        
	        $result = $this->User_model -> getUserInfo($id);
	        $data['username'] = $result['username'];
	        
	        $data['group'] = $this->User_model->getGroup();
	        $this->load->view('userManage/editUser', $data);
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
	
	//用户组列表
	public function groupList(){
	    $data['title'] = '用户管理 - 组列表';
	    $this->load->model('Auth_group_model');
	    $data['list'] = $this->Auth_group_model->getGroupList();
	    
	    $this->load->view('userManage/groupList',$data);
	}
	
	public function addGroup(){
	    
	    $data['title'] = '用户管理 - 添加用户组';
	    
	    $this->load->model('Menu_model');
	    
	    $data['top_menu'] = $this->Menu_model->getTopMenu();
	    $data['menu'] = $this->Menu_model->getSubMenu();
	    
	    $data['rules'] = $this->User_model->getAllRule();
	    
// 	    var_dump($data);exit;
	    $this->load->view('userManage/addGroup',$data);
	}
}
