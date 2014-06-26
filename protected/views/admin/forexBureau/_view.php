<?php
/* @var $this ForexBureauController */
/* @var $data ForexBureau */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forex_bureau_name')); ?>:</b>
	<?php echo CHtml::encode($data->forex_bureau_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postal_address')); ?>:</b>
	<?php echo CHtml::encode($data->postal_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('building')); ?>:</b>
	<?php echo CHtml::encode($data->building); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('physical_address')); ?>:</b>
	<?php echo CHtml::encode($data->physical_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone')); ?>:</b>
	<?php echo CHtml::encode($data->telephone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php echo CHtml::encode($data->logo); ?>
	<br />

	*/ ?>

</div>