<?php
namespace app\admin\controller;

class BlogController extends BaseController
{
    public function index(){
        $this->assign('title', '文章列表');
        $this->assign('nav', '文章列表');
        return $this->fetch('list');
    }

    public function create(){
        $this->assign('title', '添加文章');
        $this->assign('nav', '文章列表');
        return $this->fetch('create');
    }
}