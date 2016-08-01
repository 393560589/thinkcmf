<?php

namespace plugins\SocialComment;
use Common\Lib\Plugin;


    class SocialCommentPlugin extends Plugin{

        public $info = array(
            'name'=>'SocialComment',
            'title'=>'友言社交化评论',
            'description'=>'友言社交化评论插件',
            'status'=>1,
            'author'=>'rainfer',
            'version'=>'1.0'
        );

        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }

        public function comment($param){
            $this->assign('plugin_config', $this->getConfig());
            $this->display('comment');
        }
    }