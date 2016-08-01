<?php
namespace Api\Controller;
use Common\Controller\AppframeController;
class GuestbookController extends AppframeController{
	
	protected $guestbook_model;
	
	function _initialize() {
		parent::_initialize();
		$this->guestbook_model=D("Common/Guestbook");
	}
	
	function index(){
		
	}
	
	function addmsg(){
		//使用系统函数，可以高效编写代码
		if(!sp_check_verify_code()){
			$this->error("验证码错误！");
			$this->error("验证码错误！");
		}
		
		if (IS_POST) {
			//create()函数用于收集表单信息，判断提交内容是否为空，从而进行相应的操作
			if ($this->guestbook_model->create()) {
				$result=$this->guestbook_model->add();
				if ($result!==false) {
					$this->success("留言成功！");
				} else {
					$this->error("留言失败！");
				}
			} else {
				$this->error($this->guestbook_model->getError());
			}
		}
		
	}
}