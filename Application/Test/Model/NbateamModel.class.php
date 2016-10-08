<?php

namespace Common\Model;
use Think\Model;

class NbateamModel extends Model {

	protected $trueTableName = 'nbateam';

	public function _get_infor(){
		$field = array(DB_NBATEAM_NAME,DB_NBATEAM_LOGO);
		$order = array(DB_NBATEAM_ID => "DESC");
		$data = $this->field($field)->order($order)->limit(0,5)->select();
		return $data;
	}

 }