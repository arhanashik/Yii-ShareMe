<?php
/* @var $this StatusController */
/* @var $model Status */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerScript('privacy-option-change', "
$('#privacy-option').change(function(){
    var value = $('#privacy-option :selected').val();
	if(value=='custom') $('.share-with').show();
	else $('.share-with').hide();
	return false;
});
");
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'status-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'privacy'); ?>
        <?php echo $form->dropDownList($model, 'privacy', array('public' => "Public", 'private' => "Private", 'agents only' => "Agents Only", 'clients only' => "Clients Only", 'custom' => "Custom"), array('id'=>'privacy-option')); ?>
        <?php echo $form->error($model, 'privacy'); ?>
    </div>

    <div class="row share-with" style="display:none">
        <?php echo $form->labelEx($model, 'share_with'); ?>
        <?php echo $form->dropDownList($model, 'share_with', CHtml::listData(User::model()->findAll(), 'id', 'name'), array('empty'=>'-- Select --')); ?>
        <?php echo $form->error($model, 'share_with'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'post'); ?>
        <?php echo $form->textArea($model, 'post', array('size' => 60, 'maxlength' => 500)); ?>
        <?php echo $form->error($model, 'post'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->