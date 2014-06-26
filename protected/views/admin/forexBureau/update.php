<?php
/* @var $this ForexBureauController */
/* @var $model ForexBureau */

$this->breadcrumbs=array(
	'Forex Bureaus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ForexBureau', 'url'=>array('index')),
	array('label'=>'Create ForexBureau', 'url'=>array('create')),
	array('label'=>'View ForexBureau', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ForexBureau', 'url'=>array('admin')),
);
?>

<h1>Update ForexBureau <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>