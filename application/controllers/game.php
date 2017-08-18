<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller {

	public function index(){
		$data['title'] = '数据模板 - 数据统计';
		$this->load->view('game/index', $data);
	}
	public function second(){
		$data['title'] = '网格统计 - 数据统计';
		$this->load->view('game/template', $data);
	}
}
