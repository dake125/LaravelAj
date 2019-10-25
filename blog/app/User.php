<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;
use Hash;
class User extends Model
{
    public function signup(){
        $password = Request::get('password');
        $username = Request::get('username');
        if(!Request::get('username') || !Request::get('passwore')){
            return ['status'=>0,'msg'=>'用户名密码不能为空'];
        }
        $user_exists = $this->where('username',$username)->exits();
        if($user_exists){
            return 1;
        }
        $hashed_password = bcrypt($password);
        $user = $this;
        $this->password = $hashed_password;
        $this->username = $username;
        $this->save();
    }
    public function login(){

    }
}
