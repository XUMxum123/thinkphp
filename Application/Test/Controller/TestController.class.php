<?php
namespace Test\Controller;
use Think\Controller;
class TestController extends Controller {

    public function index(){
         $name = "xum-xum";
		 $this->assign("name",$name);
		 $nbateam = D(DB_NBATEAM_TAB);
		 $data = $nbateam->_get_infor();
		 $this->assign("data",$data);
		 $target = "Test/index";
		 $this->display($target);
    }

}
