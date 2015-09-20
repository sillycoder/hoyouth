<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RegisterForm extends CFormModel
{
    public $username;
    public $password;
    public $password2;
    public $phone;
    public $email;
    public $salt;
    public $groupid;
    public $regdate;
    public $verify;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */

    public function rules()
    {
        return array(
            array('username, password, password2', 'required','message'=>'必填'),
            array('username', 'length', 'min'=>5, 'max'=>20, 'tooLong'=>'5~20个字符','tooShort'=>'5~20个字符'),
            array('username', 'unique', 'className'=>'User', 'message'=>'用户名{value}已存在'),
            array('password2', 'compare', 'compareAttribute'=>'password', 'message'=>'密码不一致'),
//            array('email', 'email', 'message'=>'格式不正确'),
//            array('phone', 'match','pattern'=>'/^1[3578][0-9]{9}$/','message'=>'请输入正确的手机号'),
            array('salt', 'length', 'max'=>6),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'uid' => 'Uid',
            'username' => 'Username',
            'password' => 'Password',
            'phone' => 'Phone',
            'email' => 'Email',
            'groupid' => 'Groupid',
            'regdate' => 'Regdate',
            'verify' => 'verify',
            'salt'=>'salt'
        );
    }

    public function register()
    {
        $user = new User;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->salt = substr($this->generate_key(), 0, 6);
        $user->password = md5(md5($this->password).$user->salt );
        $user->groupid = 10;
        if(!empty($this->phone)){
	$user->verify = 2;
        }else{
	$user->verify = 0;
        }
        $user->regdate = time();
        if($user->validate()){
            if($user->save()){
                $this->afterRegister($this->username, $this->password);
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function afterRegister($username, $password){
        $model=new LoginForm;
        $model->username = $username;
        $model->password = $password;
        if($model->login()){
            return true;
        }
    }

    public function generate_key() {
        $random = $this->random(32);
        $info = md5($_SERVER['SERVER_SOFTWARE'].$_SERVER['SERVER_NAME'].$_SERVER['SERVER_ADDR'].$_SERVER['SERVER_PORT'].$_SERVER['HTTP_USER_AGENT'].time());
        $return = array();
        for($i=0; $i<32; $i++) {
            $return[$i] = $random[$i].$info[$i];
        }
        return implode('', $return);
    }

    public function random($length) {
        $hash = '';
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
        $max = strlen($chars) - 1;
        PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
        for($i = 0; $i < $length; $i++) {
            $hash .= $chars[mt_rand(0, $max)];
        }
        return $hash;
    }
}
