<?php

/**
 * Asistencia form base class.
 *
 * @method Asistencia getObject() Returns the current form's model object
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAsistenciaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha'                          => new sfWidgetFormInputHidden(),
      'asistio'                        => new sfWidgetFormInputCheckbox(),
      'Estudiante_id'                  => new sfWidgetFormInputHidden(),
      'CursoProgramado_id'             => new sfWidgetFormInputHidden(),
      'CursoProgramado_Curso_id'       => new sfWidgetFormInputHidden(),
      'CursoProgramado_Institucion_id' => new sfWidgetFormInputHidden(),
      'created_at'                     => new sfWidgetFormDateTime(),
      'updated_at'                     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'fecha'                          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('fecha')), 'empty_value' => $this->getObject()->get('fecha'), 'required' => false)),
      'asistio'                        => new sfValidatorBoolean(),
      'Estudiante_id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('Estudiante_id')), 'empty_value' => $this->getObject()->get('Estudiante_id'), 'required' => false)),
      'CursoProgramado_id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('CursoProgramado_id')), 'empty_value' => $this->getObject()->get('CursoProgramado_id'), 'required' => false)),
      'CursoProgramado_Curso_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('CursoProgramado_Curso_id')), 'empty_value' => $this->getObject()->get('CursoProgramado_Curso_id'), 'required' => false)),
      'CursoProgramado_Institucion_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('CursoProgramado_Institucion_id')), 'empty_value' => $this->getObject()->get('CursoProgramado_Institucion_id'), 'required' => false)),
      'created_at'                     => new sfValidatorDateTime(),
      'updated_at'                     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('asistencia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Asistencia';
  }

}
