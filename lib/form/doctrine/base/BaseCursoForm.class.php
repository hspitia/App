<?php

/**
 * Curso form base class.
 *
 * @method Curso getObject() Returns the current form's model object
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCursoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormInputText(),
      'nombre_corto' => new sfWidgetFormInputText(),
      'descripcion'  => new sfWidgetFormInputText(),
      'Servicio_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'), 'add_empty' => false)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'slug'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'       => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'nombre_corto' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'descripcion'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Servicio_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'))),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'slug'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Curso', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('curso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Curso';
  }

}
