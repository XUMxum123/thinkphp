<?php
namespace Test\Controller;
use Think\Controller;
class TestController extends Controller {

    public function index(){
         $name = "xum-xum";
		 $this->assign("name",$name);
		 $target = "Test/index";
		 $this->display($target);
    }

}
