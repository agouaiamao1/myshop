<?PHP
//公共控制器
class AuthControl extends Control{
	protected $_db;
	protected $_category;
	public function __init(){
//网站关闭
	if(C('web_open')) {
			header('Content-Type:text/html;charset=utf-8');
			die("网站正在调整，已经关闭！");
		}
	  $this->_category = F('category');
	  $db = M();
	  $sql ="SELECT av.attrvalue,av.avid FROM mt_attr_class AS ac
	  JOIN mt_attr_value AS av ON ac.acid=av.class_acid
	  WHERE attr_name='跟高'" ;
      $this->attr1=$db->query($sql);
	  $this->category = Data::channelLevel($this->_category);

    }
}