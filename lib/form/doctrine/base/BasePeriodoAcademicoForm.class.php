<?php

/**
 * PeriodoAcademico form base class.
 *
 * @method PeriodoAcademico getObject() Returns the current form's model object
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePeriodoAcademicoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'codigo'        => new sfWidgetFormInputText(),
      'inicio'        => new sfWidgetFormDate(),
      'fin'           => new sfWidgetFormDate(),
      'comentarios'   => new sfWidgetFormInputText(),
      'Calendario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Calendario'), 'add_empty' => false)),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo'        => new sfValidatorString(array('max_length' => 15)),
      'inicio'        => new sfValidatorDate(array('required' => false)),
      'fin'           => new sfValidatorDate(array('required' => false)),
      'comentarios'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Calendario_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Calendario'))),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'PeriodoAcademico', 'column' => array('codigo')))
    );

    $this->widgetSchema->setNameFormat('periodo_academico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PeriodoAcademico';
  }

}
