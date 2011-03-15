<?php

/**
 * Matricula form base class.
 *
 * @method Matricula getObject() Returns the current form's model object
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMatriculaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha'                               => new sfWidgetFormDate(),
      'CursoProgramado_Curso_id'            => new sfWidgetFormInputHidden(),
      'CursoProgramado_Institucion_id'      => new sfWidgetFormInputHidden(),
      'CursoProgramado_PeriodoAcademico_id' => new sfWidgetFormInputHidden(),
      'Estudiante_id'                       => new sfWidgetFormInputHidden(),
      'created_at'                          => new sfWidgetFormDateTime(),
      'updated_at'                          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'fecha'                               => new sfValidatorDate(array('required' => false)),
      'CursoProgramado_Curso_id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('CursoProgramado_Curso_id')), 'empty_value' => $this->getObject()->get('CursoProgramado_Curso_id'), 'required' => false)),
      'CursoProgramado_Institucion_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('CursoProgramado_Institucion_id')), 'empty_value' => $this->getObject()->get('CursoProgramado_Institucion_id'), 'required' => false)),
      'CursoProgramado_PeriodoAcademico_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('CursoProgramado_PeriodoAcademico_id')), 'empty_value' => $this->getObject()->get('CursoProgramado_PeriodoAcademico_id'), 'required' => false)),
      'Estudiante_id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('Estudiante_id')), 'empty_value' => $this->getObject()->get('Estudiante_id'), 'required' => false)),
      'created_at'                          => new sfValidatorDateTime(),
      'updated_at'                          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('matricula[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Matricula';
  }

}
