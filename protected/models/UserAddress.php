<?php

/**
 * This is the model class for table "hy_user_address".
 *
 * The followings are the available columns in table 'hy_user_address':
 * @property string $index
 * @property string $uid
 * @property string $privance
 * @property string $city
 * @property string $county
 * @property string $detail
 * @property string $zipcode
 * @property string $phone
 * @property string $receiver
 * @property integer $default
 * @property string $dateline
 */
class UserAddress extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserAddress the static model class
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
		return 'hy_user_address';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, privance, city, county, detail, zipcode, phone, receiver, default, dateline', 'required'),
			array('default', 'numerical', 'integerOnly'=>true),
			array('uid, dateline', 'length', 'max'=>10),
			array('privance, city, county, phone, receiver', 'length', 'max'=>20),
			array('detail', 'length', 'max'=>120),
			array('zipcode', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('index, uid, privance, city, county, detail, zipcode, phone, receiver, default, dateline', 'safe', 'on'=>'search'),
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
			'index' => 'Index',
			'uid' => 'Uid',
			'privance' => 'Privance',
			'city' => 'City',
			'county' => 'County',
			'detail' => 'Detail',
			'zipcode' => 'Zipcode',
			'phone' => 'Phone',
			'receiver' => 'Receiver',
			'default' => 'Default',
			'dateline' => 'Dateline',
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

		$criteria->compare('index',$this->index,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('privance',$this->privance,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('county',$this->county,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('receiver',$this->receiver,true);
		$criteria->compare('default',$this->default);
		$criteria->compare('dateline',$this->dateline,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}