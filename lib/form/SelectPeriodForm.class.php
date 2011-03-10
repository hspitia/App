<?php 
class SelectPeriodForm extends sfForm
{
	public function configure()
	{
		$this->setWidgets(array(
			'campo'	=> new sfWidgetFormInputText(),
			'otro'	=> new sfWidgetFormInput()
		));
		
		$this->setValidators(array(
			'campo'	=> new sfValidatorString(),
			'otro'	=> new sfValidatorString()
		));
	}
}