<?php
class LinkModel extends Model{
	public $table = 'links';
    public $auto = array(
        array('logo', '_logo', 'method', 2, 3),
    );

    public function _logo(){
        // p($_FILES);exit();
        if (empty($_FILES['logo']['name'])) {
            return Q('post.old_logo','','');
        } else {
            $upload = new Upload('./upload/'.date('h').'/'.date("i"));
            $file = $upload->upload();
            return $file[0]['path'];
        }
    }


    public function add_link(){
        if ($this->create()) {
            return $this->add();
        }
    }

    public function edit_link(){
        if ($this->create()) {
            return $this->save();
        }
    }

public function del_link($d){
       return  $this->del(array('id' =>$d)); 
    }
}