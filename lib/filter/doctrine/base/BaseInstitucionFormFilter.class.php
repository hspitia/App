<?php

/**
 * Institucion filter form base class.
 *
 * @package    siglo21
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseInstitucionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_corto'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion_1'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion_2'        => new sfWidgetFormFilterInput(),
      'telefono_1'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono_2'         => new sfWidgetFormFilterInput(),
      'fax'                => new sfWidgetFormFilterInput(),
      'email'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'web'                => new sfWidgetFormFilterInput(),
      'TipoInstitucion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoInstitucion'), 'add_empty' => true)),
      'Municipio_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => true)),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'               => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'             => new sfValidatorPass(array('required' => false)),
      'nombre_corto'       => new sfValidatorPass(array('required' => false)),
      'direccion_1'        => new sfValidatorPass(array('required' => false)),
      'direccion_2'        => new sfValidatorPass(array('required' => false)),
      'telefono_1'         => new sfValidatorPass(array('required' => false)),
      'telefono_2'         => new sfValidatorPass(array('required' => false)),
      'fax'                => new sfValidatorPass(array('required' => false)),
      'email'              => new sfValidatorPass(array('required' => false)),
      'web'                => new sfValidatorPass(array('required' => false)),
      'TipoInstitucion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoInstitucion'), 'column' => 'id')),
      'Municipio_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Municipio'), 'column' => 'id')),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'               => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('institucion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Institucion';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'nombre'             => 'Text',
      'nombre_corto'       => 'Text',
      'direccion_1'        => 'Text',
      'direccion_2'        => 'Text',
      'telefono_1'         => 'Text',
      'telefono_2'         => 'Text',
      'fax'                => 'Text',
      'email'              => 'Text',
      'web'                => 'Text',
      'TipoInstitucion_id' => 'ForeignKey',
      'Municipio_id'       => 'ForeignKey',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
      'slug'               => 'Text',
    );
  }
}
