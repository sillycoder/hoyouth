<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    public $username;
    public $uid;
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate()
    {
        $record = User::model()->findByAttributes(array('username'=>$this->username));
        if($record===null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if($record->password!==md5(md5($this->password).$record->salt))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else{
            $this-> uid=$record->uid;
            $this-> username=$record->username;
            $this->setState('uid', $record->uid);
            $this->setState('username', $record->username);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getUsername(){
        return $this-> username;
    }
    public function getUid(){
        return $this-> uid;
    }
}