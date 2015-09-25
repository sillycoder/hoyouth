<?php

/**
 * This is the model class for table "hy_order_bf_detail".
 *
 * The followings are the available columns in table 'hy_order_bf_detail':
 * @property string $orderid
 * @property string $color
 * @property string $position
 * @property string $orderNum
 * @property integer $designStyle
 * @property integer $picColor
 * @property string $descTitle
 * @property string $descDetail
 * @property string $upload
 */
class OrderBfDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrderBfDetail the static model class
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
		return 'hy_order_bf_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orderid, color, position, orderNum, designStyle, picColor, descTitle, descDetail, upload', 'required'),
			array('designStyle, picColor', 'numerical', 'integerOnly'=>true),
			array('orderid', 'length', 'max'=>20),
			array('color, position', 'length', 'max'=>4),
			array('orderNum, descTitle', 'length', 'max'=>30),
			array('descDetail', 'length', 'max'=>200),
			array('upload', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('orderid, color, position, orderNum, designStyle, picColor, descTitle, descDetail, upload', 'safe', 'on'=>'search'),
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
			'color' => 'Color',
			'position' => 'Position',
			'orderNum' => 'Order Num',
			'designStyle' => 'Design Style',
			'picColor' => 'Pic Color',
			'descTitle' => 'Desc Title',
			'descDetail' => 'Desc Detail',
			'upload' => 'Upload',
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
		$criteria->compare('color',$this->color,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('orderNum',$this->orderNum,true);
		$criteria->compare('designStyle',$this->designStyle);
		$criteria->compare('picColor',$this->picColor);
		$criteria->compare('descTitle',$this->descTitle,true);
		$criteria->compare('descDetail',$this->descDetail,true);
		$criteria->compare('upload',$this->upload,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}