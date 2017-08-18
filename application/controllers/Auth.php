<?php

class Auth extends Controller{
    protected function _initialize(){
        $this->load->model('Auth_model');
        $uid = get_uid();
        if(!$uid){
            $this->redirect('Admin/Login/index');
        }

        $adminId = getAdminUserId($uid);

        $msg = "您没有权限，请联系网站管理员";
        
        if($adminId == 0){
            $this->redirect('login/index','',1,$msg);
        }

        
        if(!$this->Auth_model->check($this->uri->segment(1).'/'.$this->uri->segment(2),
                         $adminId,
                         $type = 1,
                         $mode='url',
                         $relation='or')){
            $this->showError($msg);
        }

    }
} 