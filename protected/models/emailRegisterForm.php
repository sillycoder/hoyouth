<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class emailRegisterForm extends CFormModel
{   
    public $email;
    public $verifyCode;
    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */

    public function rules()
    {
        return array(
	array('email, verifyCode', 'required', 'message'=>'必填项不能为空'),
	array('email', 'email',  'message'=>'格式不正确'),
	array('email', 'unique', 'className'=>'User', 'message'=>'该邮箱已注册，请直接登录'),
	array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements(), 'message'=>'验证码错误请重新输入'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
	return array(
		'verifyCode'=>'Verification Code',
	);
    }

    public function register()
    {	    
	    
		    
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
