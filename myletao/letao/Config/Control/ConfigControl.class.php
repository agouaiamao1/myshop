<?php
//网站配置项
class ConfigControl extends CommonControl{
    protected $db;

    public function __init(){
        $this->db = K("Config");
    }
//网站配置
    public function index(){
        if (IS_POST) {
           // p($_POST);exit();
            foreach ($_POST AS $id => $value) {
                $this->db->save(array("id" => $id, "value" => $value));
                $this->db->update_config_file();
            }
                $config = $this->db->all();
                $data = array();
                foreach ($config as $c) {
                    $data[$c['name']] = $c['value'];
                }
                //写入配置文件
                $data = "<?php if (!defined('HDPHP_PATH')) exit; \nreturn " .
                var_export($data, true) . ";\n?>";
                file_put_contents("./data/cache/config.inc.php", $data);
                $this->success("成功");
                // $this->ajax(array("stat" => 1, "message" => "修改配置文件成功"));
        } else {
            $config = array();
            //站点配置
            $config['web'] = $this->db->all("type=1");
            foreach ($config as $n => $conf) {
                foreach ($conf as $m => $c) {
                    switch ($c['show_type']) {
                        //文本
                        case '文本':
                            $config[$n][$m]['html'] = <<<str
                                <tr>
                                    <th class="w150">{$c['title']}</th>
                                    <td class="w250">
                                        <input type="text" name="{$c['id']}" value="{$c['value']}" class="w400"/>
                                    </td>
                                    <td>
                                       
                                    </td>
                                </tr>
str;
                            break;
                        //数字
                        case '数字':
                            $config[$n][$m]['html'] = <<<str
                                <tr>
                                    <th class="w150">{$c['title']}</th>
                                    <td class="w250">
                                        <input type="text" name="{$c['id']}" value="{$c['value']}" class="w400"/>
                                    </td>
                                    <td>
                                     
                                    </td>
                                </tr>
str;
                            break;
                        //布尔
                        case '布尔':
                            $_no = $_yes = "";
                            if ($c['value'] == 1) {
                                $_yes = "checked='checked'";
                            } else {
                                $_no = "checked='checked'";
                            }
                            $config[$n][$m]['html'] = <<<str
                                <tr>
                                    <th class="w150">{$c['title']}</th>
                                    <td class="w250">
                                        <label><input type="radio" name="{$c['id']}" value="1" $_yes/> 是</label>
                                        <label><input type="radio" name="{$c['id']}" value="0" $_no/> 否</label>
                                    </td>
                                    <td>
                                 
                                    </td>
                                </tr>
str;
                            break;
                        //多行文本
                        case '多行文本':
                            $config[$n][$m]['html'] = <<<str
                                <tr>
                                    <th class="w150">{$c['title']}</th>
                                    <td class="w250">
                                        <textarea class="w400 h100" name="{$c['id']}">{$c['value']}</textarea>
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
str;
                            break;
                    }
                }
            }
            $this->assign("config", $config);
            $this->display();
        }
   }

    //ajax修改密码
    public function change_pass(){
    	$db = M("admin");
        if (IS_POST) {	
            $data =array(
              "password" =>Q("post.password", "", "md5"),
              "aid" =>Q("post.aid", "", "trim,intval")
            ); 
            if ($db->save($data)) {
                session_unset();
                session_destroy();
                echo 1;
                exit();
            }
        } else {
           // p(Q("session.aid"));exit();
            $user = $db->find(session("aid"));
            $this->assign("user", $user);
            $this->display('change.html');
        }
    }
        //ajax验证密码
    public function check_password(){
        $aid = Q("session.aid");
        $db = M("admin");
        $old_password = Q("post.old_password", "", "trim,md5");
        if ($db->where(array("password" => $old_password, "aid" => $aid))->find()) {
            echo 1;
            exit();
        }
       
    }
        //ajax请求更改缓存
    public function update_config(){
       if($this->db->update_config_file()){
           $this->ajax(array('state'=>1,'message'=>"缓存更新成功！"));
        }else{
           $this->ajax(array('state'=>0,'message'=>"更新失败，请检查目录写权限"));
        }
    }

    public function links(){
        echo 1;
    }

}