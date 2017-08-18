<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index(){
		$data['title'] = '用户管理 - 用户权限';
		$this->load->view('userManage/index', $data);
	}

	//新增用户 表单
	public function addUser(){
		$data['title'] = '新增用户 - 用户权限';
		$this->load->view('userManage/addUser', $data);
	}
	//模拟成功插入用户
	public function insertUer(){
		exit(json_encode(array('ack' => true, 'msg' => '新增用户成功！')));
	}

	//修改密码 表单
	public function editPWD(){
		$id = $this->input->get('id');
		$data['title'] = '修改密码 - 用户权限';
		$data['id'] = $id;
		$this->load->view('userManage/editPWD', $data);
	}
	//模拟成功修改密码
	public function modifyPWD(){
		exit(json_encode(array('ack' => true, 'msg' => '修改密码成功！')));
	}

	//重置密码 表单
	public function resetPWD(){
		$id = $this->input->get('id');
		$data['title'] = '重置密码 - 用户权限';
		$data['id'] = $id;
		$this->load->view('userManage/resetPWD', $data);
	}
	//模拟成功重置密码
	public function oncePWD(){
		exit(json_encode(array('ack' => true, 'msg' => '修改密码成功！')));
	}

	//分配角色 表单
	public function allotForm(){
		$id = $this->input->get('id');
		$data['title'] = '分配角色 - 用户权限';
		$data['id'] = $id;
		$this->load->view('userManage/allotForm', $data);
	}
	//模拟成功分配角色
	public function changeAllot(){
		exit(json_encode(array('ack' => true, 'msg' => '分配角色成功！')));
	}

	//模拟 离职清权限 成功
	public function clearPower(){
		exit(json_encode(array('ack' => true, 'msg' => '离职清权限成功！')));
	}

	//修改密码 页面
	public function changePassword(){
		$data['title'] = '用户管理 - 修改密码';
		$this->load->view('userManage/changePassword', $data);
	}

	//重置密码 页面
	public function resetPassword(){
		$data['title'] = '用户管理 - 重置密码';
		$this->load->view('userManage/resetPassword', $data);
	}
}
