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
	<p class="register-title">成为好青年还差一步</p>	
	<table>	
		<tr>
			<td class="td_input"><?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50,'class'=>'input', 'autocomplete'=>'off', 'placeholder'=>'请输入用户名')); ?></td>
			<td><?php echo $form->error($model,'username', array('class'=>'input-error')); ?></td>
		</tr>
		<tr>
			<td class="td_input"><?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>20,'class'=>'input', 'placeholder'=>'账号密码')); ?></td>
			<td><?php echo $form->error($model,'password', array('class'=>'input-error')); ?></td>
		</tr>

		<tr>
			<td class="td_input"><?php echo $form->passwordField($model,'password2',array('size'=>20,'maxlength'=>20,'class'=>'input', 'placeholder'=>'确认密码')); ?></td>
			<td><?php echo $form->error($model,'password2', array('class'=>'input-error')); ?></td>
		</tr>		
	</table>
	
	<div class="register_btn">
		<?php echo CHtml::submitButton('立即注册', array('class'=>'submit_btn btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->