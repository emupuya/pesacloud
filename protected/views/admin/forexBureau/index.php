<?php
/* @var $this ForexBureauController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Forex Bureaus',
);

$this->menu=array(
	array('label'=>'Create ForexBureau', 'url'=>array('create')),
	array('label'=>'Manage ForexBureau', 'url'=>array('admin')),
);
?>

<h1>Forex Bureaus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
