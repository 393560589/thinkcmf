<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;
use Common\Controller\HomebaseController; 
/**
 * 首页
 */
class IndexController extends HomebaseController {
	
    //首页
	public function index() 
	{
		//用于显示首页合作企业的相关信息
		$d=D('Admin/links');
		$m=$d->select();
		$this->assign('m',$m);
		//用于显示首页模块内容
	    $ar=D('portal/posts');
		//用于显示公司新闻模块的内容
	     $sql='select *from ty_posts where id in 
		 (select object_id from ty_term_relationships where term_id=7)
		  order by post_modified desc limit 5'; 
		 /* $company_news['term_id']=7; */
	    $company_news=$ar->query($sql);
	    $this->assign('company_news',$company_news); 
	   //用于显示行业动态模块的内容
	   $sql1='select * from ty_posts where id in 
		(select object_id from ty_term_relationships where term_id=8) 
	    order by post_modified desc limit 5'; 
		//将posts和terms_relationships表进行关联
	    $hangye_domain=$ar->query($sql1);
/* 		 $hangye_domain['term_id']=8; */
       $this->assign('hangye_domain',$hangye_domain);
	    //用于实现点击文章标题，能够跳转到相应文章中
        $this->display(":index");
      }
	public function article(){
		//用于显示行业动态更多新闻文章
			$article=D('Portal/posts');
		 /*   $a=$article->order('post_modified desc')->select(); */
		   $sql='select * from ty_posts where id in (select object_id from ty_term_relationships where term_id=8) order by post_modified desc';
		   $a=$article->query($sql);
		   $this->assign('newname','行业动态');
		   
		   //实现分页功能，先查询所有父类为行业动态的文章记录数====未完成==========
	/* 	  $count='select count(*) as number from ty_posts where id in (select object_id from ty_term_relationships where term_id=7)';
		  $ct=$article->count($count);
		  echo $ct;
		  exit; */
		   $this->assign('a',$a);
		   $this->display();
				
		}
		public function domain()
		{//用于显示公司更多新闻文章
		$article=D('Portal/posts');
			/*$at=$article->order('post_modified desc')->select();*/
	    $sql='select * from ty_posts where id in (select object_id from ty_term_relationships where term_id=7) order by post_modified desc';
		 $at=$article->query($sql);
		 $this->assign('domain','公司新闻');
		 $this->assign('at',$at);
		 $this->display();
		}
		//用于显示联系我们的页面
		public function contact()
		{
				$this->display();
		}
			//获取关于我们的文章内容
		  public function va()
		{
	    $relative_of_us=D('portal/posts');
	    $sql2='select *from ty_posts where
		 id in (select object_id from ty_term_relationships where term_id=11)
		 limit 1';
	    $va=$relative_of_us->query($sql2);
	    $this->assign('va',$va);
		 $this->display(':article1');
			
		}
		//用于显示企业文化的内容
		public function enter_culture()
		{
			$this->assign('name','企业文化');
			$this->display();	
		}
		//用于显示招聘信息的内容
		public function zhaopin()
		{	
		   $this->assign('name','招聘信息');
         $this->display();	  
		}
		//用于获取与三大运营商的深度合作
		public function yunyingshang()
		{
			
			$y=D('posts');
			$sql='SELECT * FROM ty_posts where id in (select object_id from ty_term_relationships where term_id=22)';
			$yys=$y->query($sql);
		   $this->assign('yys',$yys);
		   $this->display();
	
		}
		
		
		
		
	//用于获取与保险业的3C产品和充值业务合作内容
	//用于获取与银行业的话费、流量和商城合作
	//用于获取与知名互联网企业充值合作
		

}


