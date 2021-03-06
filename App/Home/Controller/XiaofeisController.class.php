<?php

/**
 *      消费明细表控制器
 *      [X-Mis] (C)2007-2099
 *      This is NOT a freeware, use is subject to license terms
 *      http://www.xinyou88.com
 *      tel:400-000-9981
 *      qq:16129825
 */

namespace Home\Controller;
use Think\Controller;

class XiaofeisController extends CommonController {

	public function _initialize() {
		parent::_initialize();
		$this->dbname = CONTROLLER_NAME;
	}

	function _filter(&$map) {
		if (!in_array(session('uid'), C('ADMINISTRATOR'))) {
			if (session('iszb') !== '是') {
				$map['shopid'] = array('EQ', session('shopid'));
			}
		}

		if (isset($_REQUEST['shopid']) && $_REQUEST['shopid'] != '') {$map['shopid'] = array('EQ', urldecode(I('shopid')));}
		if (isset($_REQUEST['juname']) && $_REQUEST['juname'] != '') {$map['juname'] = array('EQ', urldecode(I('juname')));}

	}

	public function _befor_index() {
		$shopidlist = M($this->dbname)->where(array('shopid' => array('neq', '')))->distinct('shopid')->field('shopid')->select();
		$this->assign('shopidlist', $shopidlist);
		$junamelist = M($this->dbname)->where(array('juname' => array('neq', '')))->distinct('juname')->field('juname')->select();
		$this->assign('junamelist', $junamelist);
	}

	public function _befor_add() {
		$attid = time();
		$this->assign('attid', $attid);

	}

	public function _befor_insert($data) {

	}

	public function _after_add() {

	}

	public function _befor_edit() {
		$model = D($this->dbname);
		$info = $model->find(I('get.id'));
		$attid = $info['attid'];
		$this->assign('attid', $attid);
	}

	public function _befor_update($data) {

	}

	public function _after_edit() {

	}

	public function _befor_view($id) {

	}

	public function _befor_del($id) {

	}

	public function _after_del() {

	}

	public function outxls() {
		$model = D($this->dbname);
		$map = $this->_search();
		if (method_exists($this, '_filter')) {
			$this->_filter($map);
		}
		$list = $model->where($map)->field('id,shopid,xid,danhao,bianhao,title,xjiage,zjiage,shuliang,xiaoji,jifen,juid,juname,zhuangtai,edit')->select();
		$headArr = array('ID', '所在店铺', '订单ID', '消费单号', '商品编号', '商品名称', '销售价格', '折后价格', '购买数量', '小计', '获得积分', '员工ID', '提成员工', '订单状态', '是否编辑');
		$filename = '消费明细表';
		$this->xlsout($filename, $headArr, $list);
	}

	public function fenxi() {
		$this->display();
	}

}