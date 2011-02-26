<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'apellidos'  => new sfWidgetFormInputText(),
      'nombres'    => new sfWidgetFormInputText(),
      'telefono'   => new sfWidgetFormInputText(),
      'movil'      => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'username'   => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'Perfil_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'), 'add_empty' => false)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'slug'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'apellidos'  => new sfValidatorString(array('max_length' => 128)),
      'nombres'    => new sfValidatorString(array('max_length' => 128)),
      'telefono'   => new sfValidatorString(array('max_length' => 20)),
      'movil'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 128)),
      'username'   => new sfValidatorString(array('max_length' => 20)),
      'password'   => new sfValidatorString(array('max_length' => 20)),
      'Perfil_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'))),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
      'slug'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Usuario', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
