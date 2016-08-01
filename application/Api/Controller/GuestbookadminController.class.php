<?php
namespace Api\Controller;
use Common\Controller\AdminbaseController;
class GuestbookadminController extends AdminbaseController{
	
	protected $guestbook_model;
	
	function _initialize() {
		parent::_initialize();
		$this->guestbook_model=D("Common/Guestbook");
	}
	
	function index(){
		$count=$this->guestbook_model->where(array("status"=>1))->count();
		$page = $this->page($count, 20);
		$guestmsgs=$this->guestbook_model->where(array("status"=>1))->order(array("createtime"=>"DESC"))->limit($page->firstRow . ',' . $page->listRows)->select();
		$this->assign("Page", $page->show('Admin'));
		$this->assign("guestmsgs",$guestmsgs);
		$this->display();
	}
	function delete(){
		$id=intval(I("get.id"));
		//在使用条件查询时，既可以使用等于号,也可以使用数组形式
		$result=$this->guestbook_model->where(array("id"=>$id))->delete();
		if($result!==false){
			$this->success("删除成功！", U("Guestbookadmin/index"));
		}else
		{
			      $this->error('删除失败!');
		}
	}
}