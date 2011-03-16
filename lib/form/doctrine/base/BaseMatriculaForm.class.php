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
      'id'                                  => new sfWidgetFormInputHidden(),
      'fecha'                               => new sfWidgetFormDate(),
      'CursoProgramado_Curso_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CursoProgramadoCurso'), 'add_empty' => false)),
      'CursoProgramado_Institucion_id'      => new sfWidgetFormInputText(),
      'CursoProgramado_PeriodoAcademico_id' => new sfWidgetFormInputText(),
      'Estudiante_id'                       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estudiante'), 'add_empty' => false)),
      'created_at'                          => new sfWidgetFormDateTime(),
      'updated_at'                          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fecha'                               => new sfValidatorDate(array('required' => false)),
      'CursoProgramado_Curso_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CursoProgramadoCurso'))),
      'CursoProgramado_Institucion_id'      => new sfValidatorInteger(),
      'CursoProgramado_PeriodoAcademico_id' => new sfValidatorInteger(),
      'Estudiante_id'                       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estudiante'))),
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
