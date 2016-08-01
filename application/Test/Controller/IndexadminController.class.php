<?php

/**
 * 案例展示页面
 */
namespace Test\Controller;
use Common\Controller\AdminbaseController;
class IndexadminController extends AdminbaseController {
    //登录
	public function index() {
		$cat=D('terms');
		$ca=$cat->select();
		$this->assign("ca",$ca);
		$this->display("Indexadmin/index");
	}
	public function test(){
	  echo "aaa";
	  exit;
		
	}

}