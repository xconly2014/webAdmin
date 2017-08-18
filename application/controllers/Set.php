<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set extends CI_Controller {
	public function index(){
		$data['title'] = '系统配置 - 设置';
		$this->load->view('setCenter/index', $data);
	}

	public function pinKa(){
		$data['title'] = '拼卡规则 - 设置';
		$this->load->view('setCenter/pinka', $data);
	}

	public function android(){
		$data['title'] = '安卓版本 - 设置';
		$this->load->view('setCenter/android', $data);
	}
	
	//新增版本信息页
	public function addAndroid(){
		$this->load->view('setCenter/add_android');
	}
	
	//模拟ajax添加安卓版本
	public function insertAndroid(){
		exit(json_encode(array('ack' => true, 'msg' => '添加成功！')));
	}
	
	//编辑版本信息页
	public function editAndroid(){
		$id = $this->input->get('id');
		$data['id'] = $id;
		$this->load->view('setCenter/edit_android',$data);
	}
	
	//模拟ajax更新安卓版本
	public function updateAndroid(){
		exit(json_encode(array('ack' => true, 'msg' => '修改成功')));
	}
	
	//模拟ajax删除安卓版本
	public function delAndroid(){
		exit(json_encode(array('ack' => true, 'msg' => '删除成功')));
	}
	
	public function ncaList(){
		$data['title'] = '权限列表 - 设置';
		$this->load->view('setCenter/ncalist', $data);
	}

	public function planingJob(){
		$data['title'] = '计划任务 - 设置';
		$this->load->view('setCenter/planing_job', $data);
	}

	//敏感词页
	public function badWord(){
		$data['title'] = '敏感词 - 设置';
		$this->load->view('setCenter/bad_word', $data);
	}
	//模拟ajax添加敏感词
	public function insertWord(){
		exit(json_encode(array('ack' => true, 'msg' => '添加成功')));
	}
	//模拟ajax删除敏感词
	public function delWord(){
		exit(json_encode(array('ack' => true, 'msg' => '删除成功')));
	}
}
