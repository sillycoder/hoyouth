<?php
class OrderController extends Controller
{
    public $layout='//layouts/order_column';
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
                'actions'=>array('bfCheckout', 'pay', 'index'),
                'expression'=>'!Yii::app()->user->isGuest'
            ),
            array('allow',
//                'actions'=>array('index'),
//                'users'=>array('*'),
            ),

            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }
    public function actionIndex()
    {
        $this->actionBfCheckout();
        Yii::app()->end();
    }

    public function actionBfCheckout()
    {
        if(empty(Yii::app()->session['cart'])){
            $this->redirect(array('shop/bf'));
        }


        if(!empty($_POST)){
            $this->redirect(array('order/pay'));
        }
        $color_arr = array('白色','灰色','黑色','红色');
        $position_arr = array('正面大图', '正面小图', '背面大图', '背面小图');
        $cart = Yii::app()->session['cart'];
        $cart['price'] = $this->countPrice($cart['position']);
        $cart['color'] = $color_arr[$cart['color']];

        $position = $spe = '';
        $pos = $cart['position'];
        for($i=0;$i<4;$i++){
            if($pos[$i] == 1){
                $position .= $spe.$position_arr[$i];
                $spe = '+';
            }
        }
        $cart['position'] = $position;

        $amount = array();$count = 0;
        foreach(explode('|', $cart['amount'] ) as $v){
            $tmp = explode(':', $v);
            $amount[$tmp[0]] = $tmp[1];
            $count += $tmp[1];
        }
        $cart['amount'] = $amount;
        $cart['count'] = $count;
        $cart['total'] = $count * $cart['price'];
        $this->render('bfCheckout', array(
                        'cart'=>$cart,
        ));
    }

    private function countPrice($bit){
        $bitPrice = array(9,6,9,6);
        $price = 0;
        for($i=0;$i<4;$i++){
            if($bit[$i] == 1){
                $price += $bitPrice[$i];
            }
        }
        switch($price){
            case 6:
            case 9:
                return 39;
            case 12:
            case 15:
                return 43;
            case 18:
                return 45;
            default:
                return false;
        }
    }
    public function actionPay()
    {

        $this->render('pay', array(

        ));
    }
}
