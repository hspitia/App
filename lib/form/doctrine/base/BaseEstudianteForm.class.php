<?php

/**
 * Estudiante form base class.
 *
 * @method Estudiante getObject() Returns the current form's model object
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEstudianteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'apellidos'        => new sfWidgetFormInputText(),
      'nombres'          => new sfWidgetFormInputText(),
      'numero_documento' => new sfWidgetFormInputText(),
      'direccion_1'      => new sfWidgetFormInputText(),
      'direccion_2'      => new sfWidgetFormInputText(),
      'acudiente'        => new sfWidgetFormInputText(),
      'telefono'         => new sfWidgetFormInputText(),
      'movil'            => new sfWidgetFormInputText(),
      'email'            => new sfWidgetFormInputText(),
      'Municipio_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => false)),
      'Genero_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Genero'), 'add_empty' => false)),
      'Institucion_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Institucion'), 'add_empty' => false)),
      'TipoDocumento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDocumento'), 'add_empty' => false)),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
      'slug'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'apellidos'        => new sfValidatorString(array('max_length' => 128)),
      'nombres'          => new sfValidatorString(array('max_length' => 128)),
      'numero_documento' => new sfValidatorString(array('max_length' => 45)),
      'direccion_1'      => new sfValidatorString(array('max_length' => 128)),
      'direccion_2'      => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'acudiente'        => new sfValidatorString(array('max_length' => 128)),
      'telefono'         => new sfValidatorString(array('max_length' => 20)),
      'movil'            => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'email'            => new sfValidatorString(array('max_length' => 128)),
      'Municipio_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'))),
      'Genero_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Genero'))),
      'Institucion_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Institucion'))),
      'TipoDocumento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDocumento'))),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
      'slug'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Estudiante', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('estudiante[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estudiante';
  }

}
