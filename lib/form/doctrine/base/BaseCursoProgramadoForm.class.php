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
      'grupo'               => new sfWidgetFormInputText(),
      'descripcion'         => new sfWidgetFormInputText(),
      'grado'               => new sfWidgetFormInputText(),
      'fecha_inicio'        => new sfWidgetFormDate(),
      'fecha_finalizacion'  => new sfWidgetFormDate(),
      'Curso_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Curso'), 'add_empty' => false)),
      'Institucion_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Institucion'), 'add_empty' => false)),
      'PeriodoAcademico_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PeriodoAcademico'), 'add_empty' => false)),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'grupo'               => new sfValidatorInteger(),
      'descripcion'         => new sfValidatorString(array('max_length' => 128)),
      'grado'               => new sfValidatorInteger(),
      'fecha_inicio'        => new sfValidatorDate(),
      'fecha_finalizacion'  => new sfValidatorDate(),
      'Curso_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Curso'))),
      'Institucion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Institucion'))),
      'PeriodoAcademico_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PeriodoAcademico'))),
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
