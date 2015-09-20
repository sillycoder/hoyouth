<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="login-bg">
<div class="login-form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
        'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">好青年会员</p>

	<div class="row">
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20,'class'=>'input', 'placeholder'=>'用户名/手机/邮箱')); ?>
                
	</div>

	<div class="row">
		<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>20,'class'=>'input', 'placeholder'=>'密码')); ?>		
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::submitButton('立即登录', array('class'=>'login-btn btn')); ?>
	</div>
        <div class="row"><p class="login-register">没有账号 ? <a href="<?php echo Yii::app()->createUrl('site/register'); ?>">立即注册</a></p></div>
        <div class="hidden"><?php echo $form->error($model,'username'); ?><?php echo $form->error($model,'password'); ?></div>
        <div class="row register_div">
               <?php echo $form->errorSummary($model, '', ''); ?>
        </div>
<?php $this->endWidget(); ?>
</div><!-- form -->
</div>