<?php

/**
 * CursoProgramado form base class.
 *
 * @method CursoProgramado getObject() Returns the current form's model object
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCursoProgramadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'grado'               => new sfWidgetFormInputText(),
      'descripcion'         => new sfWidgetFormInputText(),
      'fecha_inicio'        => new sfWidgetFormDate(),
      'fecha_finalizacion'  => new sfWidgetFormDate(),
      'Curso_id'            => new sfWidgetFormInputHidden(),
      'Institucion_id'      => new sfWidgetFormInputHidden(),
      'PeriodoAcademico_id' => new sfWidgetFormInputHidden(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'grado'               => new sfValidatorInteger(),
      'descripcion'         => new sfValidatorString(array('max_length' => 128)),
      'fecha_inicio'        => new sfValidatorDate(array('required' => false)),
      'fecha_finalizacion'  => new sfValidatorDate(array('required' => false)),
      'Curso_id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('Curso_id')), 'empty_value' => $this->getObject()->get('Curso_id'), 'required' => false)),
      'Institucion_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('Institucion_id')), 'empty_value' => $this->getObject()->get('Institucion_id'), 'required' => false)),
      'PeriodoAcademico_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('PeriodoAcademico_id')), 'empty_value' => $this->getObject()->get('PeriodoAcademico_id'), 'required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('curso_programado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CursoProgramado';
  }

}
