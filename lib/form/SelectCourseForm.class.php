<?php 
class SelectCourseForm extends sfForm
{
	public function configure()
	{
		$this->setWidgets(array(
			'curso'	=> new sfWidgetFormInputText(),
		));
		
		$this->setValidators(array(
			'curso'	=> new sfValidatorString()
		));
	}
}