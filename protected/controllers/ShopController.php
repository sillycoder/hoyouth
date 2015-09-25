<?php

class ShopController extends Controller
{
    public function filters()
    {
        return array(
            'accessControl',
        );
    }
    public function accessRules()
    {
        return array(
            array('allow',
                'actions'=>array(),
                'expression'=>'!Yii::app()->user->isGuest'
            ),
            array('allow',
                'actions'=>array('index', 'bf'),
                'users'=>array('*'),
            ),

            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }
	public function actionIndex()
	{
		$this->actionBf();
        Yii::app()->end();
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/

    public function actionBf()
    {
        $color = Yii::app()->request->getPost('color');
        $position = Yii::app()->request->getPost('position');
        $amount = Yii::app()->request->getPost('amount');
        $descTitle = Yii::app()->request->getPost('descTitle');
        $descDetail = Yii::app()->request->getPost('descDetail');
        if(isset($color) && isset($position) && isset($amount) && isset($descTitle) && isset($descDetail)){
            $chose['color'] = intval($color);
            $chose['position'] = $position;
            $chose['amount'] = $amount;
            $chose['descTitle'] = htmlspecialchars($descTitle);
            $chose['descDetail'] = htmlspecialchars($descDetail);
            Yii::app()->session['cart'] = $chose;
            $this->redirect(array('order/bfCheckout'));
        }
        $this->render('bf');
    }

    public function actionBfCheckout(){
//        if(empty(Yii::app()->session['cart'])){
//            $this->redirect(array('shop/bf'));
//        }
//        $this->render('bfCheckout');
    }

}