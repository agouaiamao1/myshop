<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/MyShop';
		WEB = 'http://127.0.0.1/MyShop/index.php';
		URL = 'http://127.0.0.1/MyShop/index.php/Index/Login/login';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Index';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Index/Login';
		METH = 'http://127.0.0.1/MyShop/index.php/Index/Login/login';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Index/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Index/Tpl/Login';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Index/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/';
</script>
<script type="text/javascript">
	var APP = "http://127.0.0.1/MyShop/index.php/Index";
</script>
<link type="text/css" rel="stylesheet" href="http://127.0.0.1/MyShop/Public/css/top.css"/>
<script type="text/javascript" src="http://127.0.0.1/MyShop/Public/js/foot.js"></script>
<script type="text/javascript" src="http://127.0.0.1/MyShop/Public/js/top.js"></script>
<title>乐淘网上鞋城 - 乐淘用户登陆</title>
<link rel="stylesheet" href="http://127.0.0.1/MyShop/./myletao/letao/Index/Tpl/Login/css/loginReg.css" />
<script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Index/Tpl/Login/js/register.js"></script>

<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?></head>
<body>
	<!-- 乐淘头部开始 -->
   <div id="blank"></div>
   <div id="lt_top">
   	 <div class="lttop">
         <ul class="lt_brand">
           <li class="ltcur"></li>
         </ul>
         <div class="letaomenu">
        <?php if(isset($_SESSION['name']) && isset($_SESSION['uid'])){?>
           欢迎您！<a id="ltlogin" style="color:#E61C3C" href="<?php echo U('Member/Member/pcenter');?>"><?php echo $_SESSION['name'];?></a>
           |<a id="ltregister"  class="register" style="color:#E61C3C" href="<?php echo U('Login/out');?>">退出</a>
       <?php  }else{ ?>
           <a id="ltlogin" style="color:#E61C3C" href="<?php echo U('Login/login');?>">请登录</a>
           <i>|</i>
           <a id="ltregister"  class="register" style="color:#E61C3C" href="<?php echo U('Login/register');?>">免费注册</a>

       <?php }?>
           <div style="display:inline;position:relative" class="lt_top_box">
              <a id="fnMyLetao2" class="down" href="##">我的乐淘</a>
              <div class="mytao_d mytao1" style="display:none;z-index: 999999;">
                <em>shiyan_xiaobin</em>
                <ul>
                  <li><a href="##">我的订单</a></li>
                  <li><a href="##">商品评价</a></li>
                  <li><a href="##">咨询回复</a></li>
                  <li class="noline"><a href="##">我的优惠券</a></li>
                </ul>
                <ul class="middleline"></ul>
                  <ul>
                    <li><a href="##">申请售后服务</a></li>
                    <li><a href="##">修改密码</a></li>
                    <li><a href="##">收货地址</a></li>
                    <li class="noline"><a href="##">鞋码换算</a></li>
                  </ul>                
              </div>
           </div>
           <i>|</i>
           <div style="display:inline;position:relative" class="lt_top_box">
              <a id="fnHistory2" class="down" href="javascript:void(0);">浏览记录</a>
              <div class="loading mytao1" style="position:absolute;display:none;z-index: 999999;">
              <h2>最近浏览的类目：</h2>
              <ul>
                <li>
                  <a href="##"><i>1.</i><em>凉拖</em><b>(7)</b></a>
                </li>
              </ul>
              <h2>最近浏览的商品：</h2>
              <div style="padding:0 12px">
                <a href="##"><img src="http://127.0.0.1/MyShop/Public/images/451743024_3.jpg" alt="" /></a>
              </div>
              </div>
            </div>
           <i>|</i>
           <div style="display:inline;position:relative" class="lt_top_box">
              <a id="fnMessage2" class="down" href="javascript:void(0);">消息中心</a>
              <div id="ddl_Message" class="ddl mytao1"  style="display:none">
                <a href="##">查看最新公告<b>(0)</b></a>
                <a href="##">查看订单提醒<b>(0)</b></a>
                <a href="##">查看评价提醒<b>(0)</b></a>
              </div>
            </div>
           <i>|</i>
           <a id="lnkmobile" class="mobile" style="color:#000" title="手机乐淘" href="##"><i> </i>手机乐淘</a>
         </div>
     </div>
   </div>
   <!-- 乐淘头部结束 -->
   <!-- 乐淘头部中间搜索部分 -->
   <div id="lt_search">
   	  <div class="ltsearch">
        <a href="<?php echo U('Index/index');?>" target="_blank"><img src="http://127.0.0.1/MyShop/Public/images/lt_logo.gif" alt="" /></a>
        <a href="<?php echo U('Index/index');?>" class="sdf"><img src="http://127.0.0.1/MyShop/Public/images/lt_logo1.gif" alt="" /></a>
        <div id="ltsearch">
          <div>
            <input type="text" id="iptsearch" />
            <em id="btnsearch" class=""></em>
            <br style="clear:both;height:0;float:none" />
          </div>
        </div>
        <div id="ltotherinfo">
          <a href="##" class="tian1"></a>
          <a href="##" class="tian2"></a>
        </div>
        <div style="clear:both;height:0;float:none"></div>
      </div>
   </div>
   <!-- 乐淘头部中间搜索结束 -->
   
   <!-- 乐淘头部最后菜单 -->
   <div id="lt_nav">
     <div class="ltnav">
       <ul>
        <!-- hover -->
         <li class="first">
           <a class="le f" href="##">首页</a>
         </li>
       <?php $hd["list"]["c"]["total"]=0;if(isset($category) && !empty($category)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($category));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($category,0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>
 
         <li class="ceshi">
           <a class="sub le" href="<?php echo U('Index/Index/category');?>"><?php echo $c['cname'];?></a>        
            <div class="letao_cmf" style="display: none;">
            <div class="letao_info">         
             <dl>
                <dt>款式:</dt> 
                <dd>
                 <?php $hd["list"]["d"]["total"]=0;if(isset($c['_data']) && !empty($c['_data'])):$_id_d=0;$_index_d=0;$lastd=min(1000,count($c['_data']));
$hd["list"]["d"]["first"]=true;
$hd["list"]["d"]["last"]=false;
$_total_d=ceil($lastd/1);$hd["list"]["d"]["total"]=$_total_d;
$_data_d = array_slice($c['_data'],0,$lastd);
if(count($_data_d)==0):echo "";
else:
foreach($_data_d as $key=>$d):
if(($_id_d)%1==0):$_id_d++;else:$_id_d++;continue;endif;
$hd["list"]["d"]["index"]=++$_index_d;
if($_index_d>=$_total_d):$hd["list"]["d"]["last"]=true;endif;?>
                 
                  <a href="<?php echo U('Index/Index/category',array('cid'=>$d['cid']));?>"><?php echo $d['cname'];?></a>
                 <?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
                 </dd>
              </dl>
              <?php if($c['cname'] == '女鞋'){?>
                <dl>
                <dt>跟款:</dt>
                <dd>
                  <?php $hd["list"]["a"]["total"]=0;if(isset($attr1) && !empty($attr1)):$_id_a=0;$_index_a=0;$lasta=min(1000,count($attr1));
$hd["list"]["a"]["first"]=true;
$hd["list"]["a"]["last"]=false;
$_total_a=ceil($lasta/1);$hd["list"]["a"]["total"]=$_total_a;
$_data_a = array_slice($attr1,0,$lasta);
if(count($_data_a)==0):echo "";
else:
foreach($_data_a as $key=>$a):
if(($_id_a)%1==0):$_id_a++;else:$_id_a++;continue;endif;
$hd["list"]["a"]["index"]=++$_index_a;
if($_index_a>=$_total_a):$hd["list"]["a"]["last"]=true;endif;?>

                  <a href="<?php echo U('Index/Index/cate_spec',array('avid'=>$a['avid']));?>"><?php echo $a['attrvalue'];?></a>
                <?php $hd["list"]["a"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
                </dd>
              </dl>
              <?php }?>
              <dl>
                <dt >热门推荐:</dt>
                <dd>
                  <a href="##">春款女鞋</a>
                  <a href="##">尖头鞋</a>
                  <a href="##">婚宴鞋</a>
                  <a href="##">铆钉鞋</a>
                  <a href="##">水晶鞋</a>
                  <a href="##">防水台</a>
                  <a href="##">超轻底</a>
                  <a href="##">复古风</a>
                </dd>
              </dl>    
            <div style="clear:both;height:0;float:none"></div>
          </div>
         </div>         
       </li>
    <?php $hd["list"]["d"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
     </ul>

   <!-- 乐淘头部最后菜单结束 -->
   <!-- 购物车部分开始 -->
     
     <div id="lt_car">
        <div class="lt_car_d">
          <em></em>
          <a href="##" class="ltcar_num">
            购物车
            <i>2</i>
          </a>
          <a href="##" class="ltcar_jiesuan"></a>
        </div>
        <div class="lt_shopcar">
          <div class="lt_sh_uid">我的购物车</div>
          <div class="sss">
            <table class="lt_car_tab">
              <thead>
                <tr>
                  <td class="prod_image"></td>
                  <td class="prod_name"></td>
                  <td class="prod_count"></td>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td class="prod_image">
                      <a href="##"><img src="http://127.0.0.1/MyShop/Public/images/947749585_3.jpg" alt="" /></a>
                    </td>
                    <td class="prod_name">
                      <a href="##">潮流 透气 C+ 斯迦 英雄季•蜘蛛侠系列 男士潮流新款时尚休闲经 尺码:40</a>
                    </td>
                    <td>
                      <span class="tly_prodadd" title="商品数量+1"></span>
                      <span class="tly_prodnum">1</span>
                      <span class="tly_prodsubstract" title="删除此商品"></span>
                    </td>
                  </tr>
                  <tr class="prod_price">
                     <td style="vertical-align:top;text-align:left"></td>
                     <td style="text-align:left">
                      专柜价：399元    乐淘价：<i>239元</i>
                     </td>
                     <td style="text-align:right">
                       [<a href="javascript:void(0);">移入收藏夹</a>]
                     </td>
                  </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td class="prodtotal" style="height:18px;line-height:18px;padding-top:18px;text-align:right" colspan="3">
                   <input id="hid_prod_count" type="hidden" value="2">数量总计：2件   商品总额：
                    <strong>488.00元</strong> 
                  </td>
                </tr>
                <tr>
                  <td style="text-align:right" colspan="3">应付商品金额:<i class="ltbigprice">488.00元</i></td>
                </tr>
                <tr>
                  <td class="prodtotal" style="padding-bottom:12px;text-align:right" colspan="3">
                  <a class="btn_clear" href="javascript:void(0);">清空购物车</a>
                  <a target="_blank" href="##">
                      <img class="btn_toorder" style="width:90px;height:25px" alt="" src="http://127.0.0.1/MyShop/Public/images/sc_buy5.gif">
                  </a>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
     </div>
     <!-- 购物车部分结束-->
     </div>
   </div>
   <!-- 乐淘头部最后菜单结束 -->
   <!--[if IE666]>
  <script>
      alert("Please update your browser version!")
  </script>
  <![endif]-->
   <div id="ltlogreg" class="center relat">
   	 <!-- 乐淘登陆开始 -->
   	 <div id="ltlinknav" class="blue_border">
       <a href="/">首页</a>  》 登录
     </div>
     
     <div class="reg_main">
     	<div id="reg_right">
         <h2>还不是乐淘用户？</h2>
         <p>现在免费注册成为乐淘用户，便能立刻享受便宜又放心的购物乐趣。</p>
         <div style="text-align:center">
           <a title="注册帐号" href="<?php echo U('Login/register');?>">
             <img alt="注册帐号" src="http://127.0.0.1/MyShop/Public/images/btn_register.gif">
           </a>
        </div>
      </div>

     <div class="login_table">
      <form action="<?php echo U('Login/login');?>" method='post' name='login'>
     	<table width="490">
     		<tbody>
     			<tr>
     				<td class="td_left">账号名：</td>
     				<td>
     					<input id="txtUserName" class="reg_input" name="loginuser">
     				    <span class="regInfo">(用户名的长度应在6-32位之间)</span>
     			    </td>
     			</tr>
     			<tr>
     				<td class="td_left">密  码：</td>
            <td>
                <input id="txtPwd" class="reg_input" type="password" name="loginpwd">
                <span class="regInfo">(密码 3-25位 区分大小写)</span>
            </td>
     			</tr>
     			<tr>
     				<td></td>
            <td>
                <a href="##" style="margin-left:10px;margin-right:10px;text-decoration:underline;color:#999">  找回密码</a>
                <input id="btn_login" class="btnblue" type="submit" value="登 录">
            </td>
     			</tr>
     		</tbody>
     	</table>
      </form>
     	<div style="float:left;width:400px;padding:0 0 0 32px">
     		<h2>使用合作伙伴帐号登录乐淘：</h2>
     		<div style="padding-top:5px;height: 130px">
     			
          <a href="##" style="float:left;height:17px;margin-left:3px;padding:0 5px 0 4px;line-height:17px;border-right:1px solid #DBDBDB"><img src="http://127.0.0.1/MyShop/Public/images/qq.gif">QQ</a>
               
               <br /><br /><br />
          <a style="display:block;height:40px;width:125px;padding:5px 0 0 8px" href="##">
          <img src="http://127.0.0.1/MyShop/Public/images/ZFB_Login.gif">
        </a>
     	    </div>
     	    <br class="clear">
        </div>
        <br class="clear">
     </div>
     <br class="clear">
   </div>
  </div>
  <!-- 乐淘登陆结束 -->
<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?>       <!-- 乐淘会员帮助页面开始 -->
   <div id="ltmemhelp">
      <div class="lt_help">
        <dl>
          <dt class="lt_1">新手帮助</dt>
          <dd><a href="##">正品保证</a></dd>
          <dd><a href="##">玩转乐淘</a></dd>
          <dd><a href="##">常见问题</a></dd>
          <dd><a href="##">优惠指南</a></dd>
        </dl>
        <dl>
          <dt class="lt_2">购物指南</dt>
          <dd><a href="##">尺码选择</a></dd>
          <dd><a href="##">发货时间</a></dd>
          <dd><a href="##">配送运费</a></dd>
          <dd><a href="##">签收/验货</a></dd>
        </dl>
        <dl>
          <dt class="lt_3">支付/配送</dt>
          <dd><a href="##">货到付款</a></dd>
          <dd><a href="##">网上支付</a></dd>
          <dd><a href="##">配送时间</a></dd>
          <dd><a href="##">配送查询</a></dd>
        </dl>
        <dl>
          <dt class="lt_4">售后服务</dt>
          <dd><a href="##">退换货政策</a></dd>
          <dd><a href="##">退换货政策</a></dd>
          <dd><a href="##">退款说明</a></dd>
        </dl>
        <dl>
          <dt class="lt_5">会员服务</dt>
          <dd><a href="##">建议反馈</a></dd>
          <dd><a href="##">CEO邮箱</a></dd>
          <dd><a href="##">服务协议</a></dd>
          <dd><a href="##">网站会员</a></dd>
        </dl>
      </div>
   </div>
     <!-- 乐淘尾部部分开始 -->
    <p id="ltlinker">
      <a href="##" rel="nofollow"> 了解乐淘</a> 
      &nbsp;|&nbsp;<a href="##" rel="nofollow"> 联系乐淘</a> 
      &nbsp;|&nbsp;<a href="##" rel="nofollow"> 媒体报道</a> 
      &nbsp;|&nbsp;<a href="##" rel="nofollow"> 版权声明</a> 
      &nbsp;|&nbsp;<a href="##"> 友情链接</a> 
      &nbsp;|&nbsp;<a href="##" rel="nofollow"> 加入乐淘</a> 
      &nbsp;|&nbsp;<a href="##" rel="nofollow"> 网站联盟</a> 
      &nbsp;|&nbsp;<a href="##" rel="nofollow"> 乐淘小脚丫</a> 
      &nbsp;|&nbsp;<a href="##" rel="nofollow"> 商务合作</a> 
      &nbsp;|&nbsp;<a href="##"> 网站导航</a> 
      &nbsp;|&nbsp;<a href="##"> 分类大全</a> 
      &nbsp;|&nbsp;<a href="##"> 问题大全</a> 
    </p>
   <p id="ltinfo">
         <i> Copyright © 2008 - 2013 Letao Inc. 乐淘 版权所有</i>
         <i>&nbsp;|&nbsp;买<a class="seo" title="买鞋子,上乐淘" href="http://www.letao.com">鞋子</a>上乐淘&nbsp;|&nbsp;</i>
          <a rel="nofollow" style="color:#111;" target="_blank" href="http://www.miitbeian.gov.cn/">京ICP证080194号&nbsp;|&nbsp;</a>
          <i>公安备案号：11061013003-00001</i>
    </p>
    <div style="height:20px"></div>
    <!-- 乐淘尾部部分结束 -->
</body>
</html>
</body>
</html>