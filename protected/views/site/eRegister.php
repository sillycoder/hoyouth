<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wp-sub register-area">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'register-form',
	'enableClientValidation'=>true,
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>	
	<p class="register-title">注册好青年账号</p>	
	<table>	
		<tr>
			<td class="td_input"><?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50,'class'=>'input', 'autocomplete'=>'off', 'placeholder'=>'输入邮箱地址')); ?></td>
			<td><?php echo $form->error($model,'email', array('class'=>'input-error')); ?></td>
		</tr>
		<tr>
			<td class="td_verifyCode"><?php echo $form->textField($model,'verifyCode', array('placeholder'=>'输入验证码', 'autocomplete'=>'off')); ?><?php $this->widget('CCaptcha', array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))); ?></td>
			<td><?php echo $form->error($model,'verifyCode', array('class'=>'input-error')); ?></td>
		</tr>
	</table>
	
	<div class="register_btn">
		<?php echo CHtml::submitButton('立即注册', array('class'=>'submit_btn btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->