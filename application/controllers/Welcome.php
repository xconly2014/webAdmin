<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		if(isset($_SESSION['yyft']['username']) && !empty($_SESSION['yyft']['username'])){
			$data['title'] = '游戏概况 - 数据统计';
			$this->load->view('dataHome', $data);
		}else{
			header("Location:login/index");
		}	
	}
}