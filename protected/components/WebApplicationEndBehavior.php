<?php
class WebApplicationEndBehavior extends CBehavior
{
	//Web app end's name
	private $_endName;
	
	//Getter
	//Get end's name via yii::app()->endName;
	public function getEndName() {
		return $this->_endName;
	}
	
	//Run application's end.
	public function runEnd($name)
	{
		$this->_endName = $name;
		
		$this->onModuleCreate = array($this, 'changeModulePaths');
		$this->onModuleCreate(new CEvent($this->owner));
		
		$this->owner->run();
	}
	
	public function onModuleCreate($event)
	{
		$this->raiseEvent('onModuleCreate',$event);
	}
	
	protected function changeModulePaths($event)
	{
		$event->sender->controllerPath .= DIRECTORY_SEPARATOR.$this->_endName;
		$event->sender->viewPath .= DIRECTORY_SEPARATOR.$this->_endName;
	}
}