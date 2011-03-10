<?php 
class SelectStudentForm extends sfForm
{
	public function configure()
	{
		$this->setWidgets(array(
			'student'	=> new sfWidgetFormInputText(),
		));
		
		$this->setValidators(array(
			'student'	=> new sfValidatorString()
		));
	}
}