<?php

/**
 * Estudiante filter form base class.
 *
 * @package    siglo21
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEstudianteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'apellidos'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombres'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero_documento' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion_1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion_2'      => new sfWidgetFormFilterInput(),
      'acudiente'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'movil'            => new sfWidgetFormFilterInput(),
      'email'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Municipio_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => true)),
      'Genero_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Genero'), 'add_empty' => true)),
      'Institucion_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Institucion'), 'add_empty' => true)),
      'TipoDocumento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoDocumento'), 'add_empty' => true)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'             => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'apellidos'        => new sfValidatorPass(array('required' => false)),
      'nombres'          => new sfValidatorPass(array('required' => false)),
      'numero_documento' => new sfValidatorPass(array('required' => false)),
      'direccion_1'      => new sfValidatorPass(array('required' => false)),
      'direccion_2'      => new sfValidatorPass(array('required' => false)),
      'acudiente'        => new sfValidatorPass(array('required' => false)),
      'telefono'         => new sfValidatorPass(array('required' => false)),
      'movil'            => new sfValidatorPass(array('required' => false)),
      'email'            => new sfValidatorPass(array('required' => false)),
      'Municipio_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Municipio'), 'column' => 'id')),
      'Genero_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Genero'), 'column' => 'id')),
      'Institucion_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Institucion'), 'column' => 'id')),
      'TipoDocumento_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoDocumento'), 'column' => 'id')),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'             => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estudiante_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estudiante';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'apellidos'        => 'Text',
      'nombres'          => 'Text',
      'numero_documento' => 'Text',
      'direccion_1'      => 'Text',
      'direccion_2'      => 'Text',
      'acudiente'        => 'Text',
      'telefono'         => 'Text',
      'movil'            => 'Text',
      'email'            => 'Text',
      'Municipio_id'     => 'ForeignKey',
      'Genero_id'        => 'ForeignKey',
      'Institucion_id'   => 'ForeignKey',
      'TipoDocumento_id' => 'ForeignKey',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
      'slug'             => 'Text',
    );
  }
}
