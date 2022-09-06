<?php
//前台bg_user表操作模型
class UserModel extends Model
{
    //判断用户名是否存在
    public function if_name_exists($user_name)
    {
        $sql="select * from bg_user where user_name='$user_name'";
        return $this->dao->fetchRow($sql);
    }
    //注册信息入库
    public function insertUser($userInfo)
    {
        extract($userInfo);
        $sql="insert into bg_user values(null,'$user_name','$user_pass',default)";
        return $this->dao->my_query($sql);
    }
    //判断用户login时的名称和密码是否合法
    public function check($user_name,$user_pass)
    {
        $sql="select * from bg_user where user_name='$user_name' and user_pass='$user_pass'";
        return $this->dao->fetchRow($sql);
    }
    //得到旧的头像名字
    public function get_oldImage_name($user_name)
    {
        $sql="select user_image from bg_user where user_name='$user_name'";
        return $this->dao->fetchColumn($sql);
    }
    //更新bg_user的新头像名字
    public function updateUserImage($user_name,$result)
    {
        $sql="update bg_user set user_image='$result' where user_name='$user_name'";
        return $this->dao->my_query($sql);
    }
}