<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class finance extends CI_Controller {
	//合同管理
	public function contract(){
		$data['title'] = '财务中心 - 合同管理';
		$this->load->view('finance/contract', $data);
	}
	//模拟 确认审核合同 成功
	public function verifyContract(){
		exit(json_encode(array('ack' => true, 'msg' => '确认合同成功！')));
	}
	//模拟 合同被驳回
	public function rebutContract(){
		exit(json_encode(array('ack' => true, 'msg' => '合同被驳回！')));
	}
	//模拟 修改合同编号 成功
	public function chkContract(){
		exit(json_encode(array('ack' => true, 'msg' => '修改合同编号成功！')));
	}
	//模拟 更改签署状态 成功
	public function chkSignType(){
		exit(json_encode(array('ack' => true, 'msg' => '更改签署状态成功！')));
	}
	//模拟 终止合同 成功
	public function endContract(){
		exit(json_encode(array('ack' => true, 'msg' => '终止合同成功！')));
	}

	public function checkBill(){
		$data['title'] = '财务中心 - 对账单管理';
		$this->load->view('finance/checkBill', $data);
	}
	public function settlement(){
		$data['title'] = '财务中心 - 结算单管理';
		$this->load->view('finance/settlement', $data);
	}
}
