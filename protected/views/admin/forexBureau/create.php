<?php
/* @var $this ForexBureauController */
/* @var $model ForexBureau */

$this->breadcrumbs=array(
	'Forex Bureaus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ForexBureau', 'url'=>array('index')),
	array('label'=>'Manage ForexBureau', 'url'=>array('admin')),
);
?>

<h1>Create ForexBureau</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>