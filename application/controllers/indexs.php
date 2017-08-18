<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexs extends CI_Controller {

	public function index(){
		$data['title'] = '游戏概况 - 数据统计';
		$this->load->view('dataHome', $data);
	}
}
