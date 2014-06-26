<?php
/* @var $this ChargeController */
/* @var $model Charge */

$this->breadcrumbs=array(
	'Charges'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Charge', 'url'=>array('index')),
	array('label'=>'Manage Charge', 'url'=>array('admin')),
);
?>

<h1>Create Charge</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>