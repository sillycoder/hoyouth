<?php

/**
 * This is the model class for table "hy_order".
 *
 * The followings are the available columns in table 'hy_order':
 * @property string $orderid
 * @property string $uid
 * @property string $dateline
 * @property integer $status
 * @property string $rmb
 */
class Order extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Order the static model class
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
		return 'hy_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, dateline, status, rmb', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('uid, dateline, rmb', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('orderid, uid, dateline, status, rmb', 'safe', 'on'=>'search'),
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
			'orderid' => 'Orderid',
			'uid' => 'Uid',
			'dateline' => 'Dateline',
			'status' => 'Status',
			'rmb' => 'Rmb',
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

		$criteria->compare('orderid',$this->orderid,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('dateline',$this->dateline,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('rmb',$this->rmb,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}