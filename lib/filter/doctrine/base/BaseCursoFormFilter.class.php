<?php

/**
 * Curso filter form base class.
 *
 * @package    siglo21
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCursoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_corto' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'  => new sfWidgetFormFilterInput(),
      'Servicio_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'), 'add_empty' => true)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'codigo'       => new sfValidatorPass(array('required' => false)),
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'nombre_corto' => new sfValidatorPass(array('required' => false)),
      'descripcion'  => new sfValidatorPass(array('required' => false)),
      'Servicio_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Servicio'), 'column' => 'id')),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('curso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Curso';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'codigo'       => 'Text',
      'nombre'       => 'Text',
      'nombre_corto' => 'Text',
      'descripcion'  => 'Text',
      'Servicio_id'  => 'ForeignKey',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
      'slug'         => 'Text',
    );
  }
}
