<?php
/* @var $this StatusController */
/* @var $data Status */
?>

<div class="view">

	<b><?php echo CHtml::encode("Name"); ?>:</b>
	<?php
    $user = User::model()->find(array('condition' => "id='".$data->user_id."'"));
    echo CHtml::encode($user->name);
    ?>
	<br />


    <b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
    <?php echo CHtml::encode($data->date); ?>
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('privacy')); ?>:</b>
	<?php echo CHtml::encode($data->privacy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('share_with')); ?>:</b>
	<?php
    $with_whom = User::model()->find(array('condition' => "id='".$data->share_with."'"));
    if(!is_null($with_whom)) echo CHtml::encode($with_whom->name);
    ?>
	<br />

    <br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('post')); ?>:</b>
	<?php echo CHtml::encode($data->post); ?>
	<br />

    <br />
    <?php echo CHtml::image(Yii::app()->request->baseUrl.'/uploads/'."$data->image","$data->image",array('height'=>180));?>
	<br />

    <br />
    <b><?php echo CHtml::encode("See Details"); ?>:</b>
    <?php echo CHtml::link(CHtml::encode("Click Here"), array('view', 'id'=>$data->id)); ?>
    <br />

</div>