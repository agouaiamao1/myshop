<?php
//用户控制器
class MemberControl extends AuthControl{
	//用户列出

	public function index(){
		$this->_db = M("user")->all();
		$this->assign("user",$this->_db);
		$this->display();
	}

	//用户操作处理
	public function lock(){
		$uid = Q('get.uid', 'intval');
		M('user')->where(array('uid'=>$uid))->save(array('lock'=>0));
		$this->success('锁定成功！');

	}
	public function unlock(){
		$uid = Q('get.uid', 'intval');
		M('user')->where(array('uid'=>$uid))->save(array('lock'=>1));
		$this->success('解锁成功！');

	}
	public function pcenter(){
		echo "这是个人中心";
	}
}