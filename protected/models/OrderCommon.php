<?php

/**
 * This is the model class for table "hy_order_common".
 *
 * The followings are the available columns in table 'hy_order_common':
 * @property string $orderid
 * @property string $privance
 * @property string $city
 * @property string $county
 * @property string $add_detail
 * @property string $zipcode
 * @property string $phone
 * @property string $receiver
 * @property integer $invoice
 * @property string $invoiceTitle
 * @property integer $payType
 * @property integer $deliveryType
 */
class OrderCommon extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrderCommon the static model class
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
		return 'hy_order_common';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orderid, privance, city, county, add_detail, zipcode, phone, receiver, invoice, invoiceTitle, payType, deliveryType', 'required'),
			array('invoice, payType, deliveryType', 'numerical', 'integerOnly'=>true),
			array('orderid, privance, city, county, phone, receiver', 'length', 'max'=>20),
			array('add_detail', 'length', 'max'=>100),
			array('zipcode', 'length', 'max'=>6),
			array('invoiceTitle', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('orderid, privance, city, county, add_detail, zipcode, phone, receiver, invoice, invoiceTitle, payType, deliveryType', 'safe', 'on'=>'search'),
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
			'privance' => 'Privance',
			'city' => 'City',
			'county' => 'County',
			'add_detail' => 'Add Detail',
			'zipcode' => 'Zipcode',
			'phone' => 'Phone',
			'receiver' => 'Receiver',
			'invoice' => 'Invoice',
			'invoiceTitle' => 'Invoice Title',
			'payType' => 'Pay Type',
			'deliveryType' => 'Delivery Type',
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
		$criteria->compare('privance',$this->privance,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('county',$this->county,true);
		$criteria->compare('add_detail',$this->add_detail,true);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('receiver',$this->receiver,true);
		$criteria->compare('invoice',$this->invoice);
		$criteria->compare('invoiceTitle',$this->invoiceTitle,true);
		$criteria->compare('payType',$this->payType);
		$criteria->compare('deliveryType',$this->deliveryType);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}