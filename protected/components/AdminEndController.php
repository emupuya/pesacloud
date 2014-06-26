<?php
class AdminEndController extends CController
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
                'controllers'=>array('site'),
                'actions'=>array('error'),
            ),

            array('allow',
                'users'=>array('*'),
                'actions'=>array('login','unauthorisedlogin'),
            ),
            array('allow',
                'users'=>array('admin@bfguide.com'),
				
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
	}
}
?>