<?php

class SiteController extends Controller
{
    public $layout='//layouts/column2';
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('login', 'contact'),
                'expression'=>'Yii::app()->user->isGuest'
            ),
//            array('allow',  // allow all users to perform 'index' and 'view' actions
//                'actions'=>array('logout'),
//                'expression'=>'!Yii::app()->user->isGuest'
//            ),
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('error', 'page', 'captcha', 'logout','register','register_s2'),
                'users'=>array('*'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=> 0xf9f9f9,
                'maxLength'=>6,
                'minLength'=>6,
	'testLimit' => 100,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
        );
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        if(!Yii::app()->user->isGuest){
            $this->redirect(array('/'));
        }
        $model=new LoginForm;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }


    public function actionRegister($_t = 'e')
    {
        if(!Yii::app()->user->isGuest){
            $this->redirect('/');
        }
	if(empty(Yii::app()->session['email']) && empty(Yii::app()->session['phone'])){
		if($_t == 'e'){
			$preRegister = new emailRegisterForm;
		}else{
			$preRegister = new phoneRegisterForm;
		}		
		if(isset($_POST['ajax']) && $_POST['ajax']==='register-form'){
			echo CActiveForm::validate($preRegister);
			Yii::app()->end();
		}//var_dump($_POST);exit;
		if(isset($_POST['emailRegisterForm'])){
			$preRegister->attributes=$_POST['emailRegisterForm'];
			if($preRegister->validate()){
				Yii::app()->session['email'] = $_POST['emailRegisterForm']['email'];
				$this->redirect(array('site/register_s2'));
			}
		}
		$this->render($_t.'Register',array('model'=>$preRegister, 'type'=>$_t));
	}else{
		$this->redirect(array('site/register_s2'));
	}
    }
    public function actionRegister_s2()
    {
        if(!Yii::app()->user->isGuest){
            $this->redirect('/');
        }
	if(empty(Yii::app()->session['email']) && empty(Yii::app()->session['phone'])){
		$this->redirect(array('site/register'));
	}else{
		Yii::app()->session['email'];
		$model=new RegisterForm;
		if(isset($_POST['ajax']) && $_POST['ajax']==='register-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		if(isset($_POST['RegisterForm'])) {
			$model->attributes=$_POST['RegisterForm'];
			$model->email = empty(Yii::app()->session['email'])? '' : Yii::app()->session['email'];
			$model->phone = empty(Yii::app()->session['phone'])? '' : Yii::app()->session['phone'];
			if($model->validate() && $model->register()){
				$this->redirect('/');
			}
		}
		$this->render('register',array('model'=>$model));
	}
    }

}
