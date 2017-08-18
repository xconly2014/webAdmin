<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Open extends CI_Controller {
	public function index(){
		$data['title'] = '企业管理 - 开放平台管理';
		$this->load->view('openSDK/index', $data);
	}
	public function baseInfo(){
		$data['title'] = '基础资料列表 - 开放平台管理';
		$this->load->view('openSDK/gameBaseList', $data);
	}
	public function gameDocked(){
		$data['title'] = '游戏对接管理 - 开放平台管理';
		$this->load->view('openSDK/gameDockedManage', $data);
	}
	public function gameGift(){
		$data['title'] = '游戏礼包管理 - 开放平台管理';
		$this->load->view('openSDK/gameGiftManage', $data);
	}
	public function eventList(){
		$data['title'] = '运营事件管理 - 开放平台管理';
		$this->load->view('openSDK/eventListManage', $data);
	}
}
