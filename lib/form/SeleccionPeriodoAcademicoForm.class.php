<?php 
class SeleccionPeriodoAcademicoForm extends sfForm
{
	public function configure()
	{
		$this->setWidgets(array(
			'PeriodoAcademico_id'	=> new sfWidgetFormDoctrineChoice(array(
				'model' 		=>	'PeriodoAcademico',
				'add_empty'	=>	false,
				'expanded'	=>	'true',
				'order_by' 	=>	array('codigo', 'asc'),
				)),
		));
		
		$this->setValidator(
			'PeriodoAcademico_id', new sfValidatorDoctrineChoice(array(
				'model'  => 'PeriodoAcademico'
				),
				array(
					'required' => 'Debe seleccionar un Período Académico'
					)));
		
		$this->widgetSchema->setNameFormat('seleccionPeriodoAcademico[%s]');
		
	}
}