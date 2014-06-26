<?php
class ForexEndController extends CController
{
	public $layout = "//layouts/column1";
	public $menu=array();
	public $breadcrumbs=array();
	
	public function filters()
	{
		return array(
			'accessControl',
		);
	}
	
	public function accessRules()
	{
		return array(
			array('allow',
				'users'=>array('*'),
				'actions'=>array('login'),
			),
			array('allow',
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}
}
?>