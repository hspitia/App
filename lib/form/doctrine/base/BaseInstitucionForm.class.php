<?php

/**
 * Institucion form base class.
 *
 * @method Institucion getObject() Returns the current form's model object
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseInstitucionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'nombre'             => new sfWidgetFormInputText(),
      'nombre_corto'       => new sfWidgetFormInputText(),
      'direccion_1'        => new sfWidgetFormInputText(),
      'direccion_2'        => new sfWidgetFormInputText(),
      'telefono_1'         => new sfWidgetFormInputText(),
      'telefono_2'         => new sfWidgetFormInputText(),
      'fax'                => new sfWidgetFormInputText(),
      'email'              => new sfWidgetFormInputText(),
      'web'                => new sfWidgetFormInputText(),
      'TipoInstitucion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoInstitucion'), 'add_empty' => false)),
      'Municipio_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => false)),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
      'slug'               => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'             => new sfValidatorString(array('max_length' => 255)),
      'nombre_corto'       => new sfValidatorString(array('max_length' => 60)),
      'direccion_1'        => new sfValidatorString(array('max_length' => 80)),
      'direccion_2'        => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'telefono_1'         => new sfValidatorString(array('max_length' => 20)),
      'telefono_2'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fax'                => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'email'              => new sfValidatorString(array('max_length' => 128)),
      'web'                => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'TipoInstitucion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoInstitucion'))),
      'Municipio_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'))),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
      'slug'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Institucion', 'column' => array('nombre'))),
        new sfValidatorDoctrineUnique(array('model' => 'Institucion', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('institucion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Institucion';
  }

}
