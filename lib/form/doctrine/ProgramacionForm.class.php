<?php 

class ProgramacionForm extends sfForm {
	
	public function configutre() {
		this->setWidgets(array(
			'Curso_id'	=>	new sfWidgetFormInputHidden()
		));
	}
}

