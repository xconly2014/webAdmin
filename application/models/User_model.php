<?php
class User_model extends CI_Model
{
	private $_db;
	private $db;
	function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('master', true);
		$this->_db = $this->load->database('default', true);
	}
	
	/**
	 * 登陆验证
	 * @return true/false 是否验证成功
	 */
	public function checkUser($username,$pwd){
	    $where = array('username' => $username, 'password' => md5($pwd));
	    $check_in_db = $this->db->get_where('admin_user', $where)->row_array();
	    if ($check_in_db)
	    {
	        $data = array(
	            'login_count' => $check_in_db['login_count']+1,
	            'login_time' => date('Y-m-d H:i:s', time()),
	            'ip' => $_SERVER['REMOTE_ADDR']
	        );
	        $this->db->update('admin_user', $data, $where);
	        return array('ack' => true, 'msg' => '', 'data' => $check_in_db);
	    }
	    else
	    {
	        return array('ack' => false, 'msg' => '请填写正确的用户名和密码！');
	    }
	}
	
	/**
	 * 登陆验证
	 * @return true/false 是否登陆成功
	 */
	public function validate()
	{
		$cookie = unserialize(get_cookie(YYFT_COOKIE));
		if ($cookie)
		{
			if ($cookie['username'] == $this->input->post('username') && $cookie['password'] == $this->input->post('password'))
			{
				$where = array('name' => $cookie['username'], 'password' => $cookie['password']);
			}
			else
			{
				$where = array('name' => $this->input->post('username'), 'password' => md5($this->input->post('password')));
				delete_cookie(YYFT_COOKIE);
			}
		}
		else
		{
			$where = array('name' => $this->input->post('username'), 'password' => md5($this->input->post('password')));
		}
		if ($this->session->userdata('captcha') && md5($this->input->post('captcha')) != $this->session->userdata('captcha'))
		{
			return array('ack' => false, 'msg' => '验证码有误，请重试！', 'exist_cookie' => $cookie);
		}
		$check_in_db = $this->_db->get_where('user', $where)->row_array();
		if ($check_in_db)
		{
			$data = array(
				'login_count' => $check_in_db['login_count']+1,
				'last_login_time' => date('Y-m-d H:i:s', time()),
				'login_ip' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->update('user', $data, $where);
			return array('ack' => true, 'msg' => '', 'exist_cookie' => $cookie, 'id' => $check_in_db['id'], 'type' => $check_in_db['type']);
		}
		else
		{
			return array('ack' => false, 'msg' => '请填写正确的用户名和密码！', 'exist_cookie' => $cookie);
		}
	}
	
	/**
	 * 新建用户
	 * @param $username 用户名
	 * @param $password 密码
	 * @param $type 类型
	 * @param $state 状态
	 * @return 新建成功(失败)和用户id
	 */
// 	public function create($username, $password, $type=3, $state=1)
// 	{
// 		$user = $this->_db->get_where('user', array('name' => $username))->row_array();
// 		if ($user['id'])
// 		{
// 			return array('ack' => false, 'msg' => '用户名已存在！', 'user_id' => $user['id']);
// 		}
// 		else
// 		{
// 			$this->db->insert('user', array('name' => $username, 'password' => md5($password), 'type' => $type, 'state' => $state, 'registered_time' => date('Y-m-d H:i:s', time()), 'last_login_time' => date('Y-m-d H:i:s', time()), 'login_count' => 0));
// 			return array('ack'=> true, 'msg' => '', 'user_id' => $user['id']);
// 		}
// 	}
	
// 	public function search($where, $limit, $offset){
// 		foreach ($where as $k => $w){
// 			if (is_array($w)){
// 				$this->_db->where_in($k, $w);
// 				unset($where[$k]);
// 			}
// 		}
// 		$this->_db->where($where);
// 		$this->_db->like('name',trim($this->input->post('name')));
// 		$db = clone($this->_db);
// 		$total = $this->_db->count_all_results('user');
		
// 		$offset = (($offset>0 ? $offset : 1) - 1) * $limit;
// 		$this->_db = $db;
// 		$this->_db->limit($limit, $offset);
// 		$result = $this->_db->get('user')->result_array();
// 		return array('total'=>$total, 'data'=>$result);
// 	}
	
// 	public function update($data, $where)
// 	{
// 		return $this->db->update('user' , $data, $where);
// 	}
	
// 	public function getAll($where=array())
// 	{
// 		return $this->_db->get_where('user', $where)->result_array();
// 	}
	
// 	public function getOne($where=array())
// 	{
// 		return $this->_db->get_where('user', $where)->row_array();
// 	}

// 	public function getSuperAdminIds()
// 	{
// 		$admin = $this->getAll(array('type' => 1));
// 		$ids = array();
// 		foreach ($admin as $a)
// 		{
// 			$ids[$a['id']] = $a['id'];
// 		}
// 		return $ids;
// 	}
	
// 	/**
// 	 * 新增角色
// 	 * @param string $name 角色名
// 	 * @param string $descript 描述
// 	 * @return array true/false 成功/失败
// 	 */
// 	public function createRole($name, $descript)
// 	{
// 		$role = $this->_db->get_where('role', array('name' => $name))->row_array();
// 		if ($role['id'])
// 		{
// 			return array('ack' => false, 'msg' => '角色而名已存在！', 'id' => $role['id']);
// 		}
// 		else
// 		{
// 			$this->db->insert('role', array('name' => $name, 'descript' => $descript));
// 			return array('ack' => true, 'msg' => '');
// 		}
// 	}
	
// 	/**
// 	 * 更新/修改角色信息
// 	 * @param array $data 更新数据
// 	 * @param array $where 条件
// 	 * @return true/false 是否更新成功
// 	 */
// 	public function updateRole($data, $where)
// 	{
// 		return $this->db->update('role', $data, $where);
// 	}
	
// 	public function getRoleAll($where=array())
// 	{
// 		return $this->_db->get_where('role', $where)->result_array();
// 	}
	
// 	public function getRoleOne($where=array())
// 	{
// 		return $this->_db->get_where('role', $where)->row_array();
// 	}
	
// 	/**
// 	 * 获取角色的用户ids
// 	 * @param array $where 查询条件
// 	 * @return array $user_ids 当前角色绑定的所有用户id
// 	 */
// 	public function getRoleUserIds($where=array())
// 	{
// 		$user_ids = array();
// 		$mapping =  $this->_db->get_where('user_role', $where)->result_array();
// 		foreach ($mapping as $m)
// 		{
// 			$user_ids[] = $m['user_id'];
// 		}
// 		return $user_ids;
// 	}
	
// 	/**
// 	 * 获取用户的角色ids
// 	 * @param array $where 查询条件
// 	 * @return array $role_ids 当前用户绑定的所有角色id
// 	 */
// 	public function getUserRoleIds($where=array())
// 	{
// 		$role_ids = array();
// 		$mapping = $this->_db->get_where('user_role', $where)->result_array();
// 		foreach ($mapping as $m)
// 		{
// 			$role_ids[] = $m['role_id'];
// 		}
// 		return $role_ids;
// 	}
	
// 	/**
// 	 * 更新角色绑定的用户
// 	 * @param int $role_id 当前角色id
// 	 * @param array $user_ids 需绑定的用户ids
// 	 * @return true
// 	 */
// 	public function updateRoleUser($role_id, $user_ids)
// 	{
// 		$mapping = $this->_db->get_where('user_role', array('role_id' => $role_id))->result_array();
// 		$user_old = array();
// 		foreach ($mapping as $m)
// 		{
// 			$user_old[] = $m['user_id'];
// 		}
// 		$user_create = array_diff($user_ids, $user_old);
// 		$user_delete = array_diff($user_old, $user_ids);
// 		foreach ($user_create as $uc)
// 		{
// 			$new = array(
// 				'user_id' => $uc,
// 				'role_id' => $role_id,
// 				'recttime' => date('Y-m-d H:i:s')
// 			);
// 			$this->db->insert('user_role', $new);
// 		}
// 		foreach ($user_delete as $ud)
// 		{
// 			$this->db->delete('user_role', array('user_id' => $ud, 'role_id' => $role_id));
// 		}
// 		return array('ack' => true, 'msg' => '');
// 	}
	
// 	/**
// 	 * 更新用户绑定的角色
// 	 * @param array $user_id 当前用户id
// 	 * @param int $role_id 需要绑定的角色ids
// 	 * @return true
// 	 */
// 	public function updateUserRole($user_id, $role_ids)
// 	{
// 		$mapping = $this->_db->get_where('user_role', array('user_id' => $user_id))->result_array();
// 		$role_old = array();
// 		foreach ($mapping as $m)
// 		{
// 			$role_old[] = $m['role_id'];
// 		}
// 		$role_create = array_diff($role_ids, $role_old);
// 		$role_delete = array_diff($role_old, $role_ids);
// 		foreach ($role_create as $rc)
// 		{
// 			$new = array(
// 				'role_id' => $rc,
// 				'user_id' => $user_id,
// 				'recttime' => date('Y-m-d H:i:s')
// 			);
// 			$this->db->insert('user_role', $new);
// 		}
// 		foreach ($role_delete as $rd)
// 		{
// 			$this->db->delete('user_role', array('role_id' => $rd, 'user_id' => $user_id));
// 		}
// 		return array('ack' => true, 'msg' => '');
// 	}
	
// 	public function cleanACL($user_id)
// 	{
// 		$check_in_db = self::getOne(array('id' => $user_id));
// 		if ($check_in_db)
// 		{
// 			$this->db->update('user', array('state' => 2), array('id' => $user_id));
// 			$this->db->delete('user_role', array('user_id' => $user_id));
// 			return array('ack' => true, 'msg' => '');
// 		}
// 		else
// 		{
// 			return array('ack' => false, 'msg' => '不存在该用户');
// 		}
// 	}
	
// 	/**
// 	 * 
// 	 * @param unknown $userid
// 	 * @return string  
// 	 * @author cyril 有空加缓存
// 	 */
// 	public  function  getNameById($userid)
// 	{
// 		$row= $this->_db->get_where('user', array('id' => $userid))->row();
// 		if(empty($row))
// 			return '未知名称';
// 		else 
// 			return $row->name;
// 	}
// 	/**
// 	 * 
// 	 * @return unknown  
// 	 * @author cyril
// 	 */
// 	public function getList()
// 	{
// 		$sql = 'SELECT * FROM `user` order by id ';
// 		$query = $this->_db->query($sql);
// 		$result = $query->result_array();
// 		return $result;
// 	}
	
// 	/*
// 	 * 获得用户名和ID,一般用于填充下拉框
// 	 * @author zhangtao
// 	 * @date 2016-3-10
// 	 */
// 	public function getIdName($where = array('state' => 1)){
// 		return $this->_db->select('id,name')->get_where('user',$where)->result_array();
// 	}
	
// 	/**
// 	 * 更改用户分组ID
// 	 * @param unknown $group_id
// 	 * @param unknown $id
// 	 * lh 2016-06-21
// 	 */
// 	public function updateGroup_Id($group_id, $id)
// 	{
// 		return $this->db->update('user', array('group_id'=>$group_id), array('id' => $id));
// 	}
	
// 	public function getGroupIdById($id)
// 	{
// 		$sql='select group_id from user  where id=?;';
// 		return $this->_db->query($sql,array($id))->row_array()['group_id'];
// 	}
}
