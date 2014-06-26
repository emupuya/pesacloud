<?php
/* @var $this ChargeController */
/* @var $model Charge */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'charge-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

<?php 
	//Charge category
	$category = ChargeCategory::model()->findAll();
				//array('order','access_level'));
	$clist =  CHtml::listData($category,'id', 'name');
	
	
	
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->dropDownList(
			$model,
			'category' ,
			$clist,
			array('empty'=>'Select a category',
				  'ajax' => array(
                                'type'=>'POST',
                                'url'=>CController::createUrl('charge/names'),
                                'update'=>'#'.CHtml::activeId($model,'name'))));
			 ?>
		<?php echo $form->error($model,'category'); ?>
	</div>
   

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->dropDownList($model,'name',array());
		
			//$model,
			//'name' ,
			//$nlist);
			//array('empty'=>'Select a category'),
			//array('onchange'=>'return setNames(this.value)'));
			//array('options'=>array('1'=>array('selected'=>'selected')))); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank'); ?>
		<?php echo $form->textField($model,'bank'); ?>
		<?php echo $form->error($model,'bank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->