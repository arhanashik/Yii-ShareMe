<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
Yii::app()->clientScript->registerScript('privacy-option-change', "
$('#user-type').change(function(){
    var value = $('#user-type :selected').val();
	if(value=='client') $('.under-agent').show();
	else $('.under-agent').hide();
	return false;
});
");
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'user_type'); ?>
        <?php echo $form->dropDownList($model, 'user_type', array('admin' => "Admin", 'agent' => "Agent", 'client' => "Client"), array('empty'=>'-- Select --', 'id'=>'user-type')); ?>
        <?php echo $form->error($model,'user_type'); ?>
    </div>

	<div class="row under-agent" style="display:none">
		<?php echo $form->labelEx($model,'boss'); ?>
        <?php echo $form->dropDownList($model, 'boss', CHtml::listData(User::model()->findAll(array('condition'=>'user_type="agent"')), 'id', 'name'), array('empty'=>'-- Select --')); ?>
		<?php echo $form->error($model,'boss'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->