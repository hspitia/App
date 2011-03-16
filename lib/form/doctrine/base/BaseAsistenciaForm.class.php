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
      'id'                             => new sfWidgetFormInputHidden(),
      'fecha'                          => new sfWidgetFormDateTime(),
      'asistio'                        => new sfWidgetFormInputCheckbox(),
      'Estudiante_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estudiante'), 'add_empty' => false)),
      'CursoProgramado_id'             => new sfWidgetFormInputText(),
      'CursoProgramado_Curso_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CursoProgramadoCurso'), 'add_empty' => false)),
      'CursoProgramado_Institucion_id' => new sfWidgetFormInputText(),
      'created_at'                     => new sfWidgetFormDateTime(),
      'updated_at'                     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fecha'                          => new sfValidatorDateTime(),
      'asistio'                        => new sfValidatorBoolean(),
      'Estudiante_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estudiante'))),
      'CursoProgramado_id'             => new sfValidatorInteger(),
      'CursoProgramado_Curso_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CursoProgramadoCurso'))),
      'CursoProgramado_Institucion_id' => new sfValidatorInteger(),
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
