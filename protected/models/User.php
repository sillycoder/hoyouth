<?php

/**
 * This is the model class for table "hy_user".
 *
 * The followings are the available columns in table 'hy_user':
 * @property string $uid
 * @property string $username
 * @property string $email
 * @property string $phone
 * @property integer $groupid
 * @property string $regdate
 * @property string $password
 * @property string $salt
 * @property integer $verify
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hy_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, groupid, regdate, password, salt, verify', 'required'),
			array('groupid, verify', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>20),
			array('email', 'length', 'max'=>30),
			array('email, phone, username', 'unique'),
			array('phone', 'length', 'max'=>11),
			array('regdate', 'length', 'max'=>10),
			array('password', 'length', 'max'=>32),
			array('salt', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('uid, username, email, phone, groupid, regdate, password, salt, verify', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'uid' => 'Uid',
			'username' => 'Username',
			'email' => 'Email',
			'phone' => 'Phone',
			'groupid' => 'Groupid',
			'regdate' => 'Regdate',
			'password' => 'Password',
			'salt' => 'Salt',
			'verify' => 'Verify',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('groupid',$this->groupid);
		$criteria->compare('regdate',$this->regdate,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('verify',$this->verify);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}