<?php

/**
 * CursoProgramado filter form base class.
 *
 * @package    siglo21
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCursoProgramadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'grupo'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grado'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_inicio'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_finalizacion'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'Curso_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Curso'), 'add_empty' => true)),
      'Institucion_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Institucion'), 'add_empty' => true)),
      'PeriodoAcademico_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PeriodoAcademico'), 'add_empty' => true)),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'grupo'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'descripcion'         => new sfValidatorPass(array('required' => false)),
      'grado'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_inicio'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fecha_finalizacion'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'Curso_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Curso'), 'column' => 'id')),
      'Institucion_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Institucion'), 'column' => 'id')),
      'PeriodoAcademico_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PeriodoAcademico'), 'column' => 'id')),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('curso_programado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CursoProgramado';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'grupo'               => 'Number',
      'descripcion'         => 'Text',
      'grado'               => 'Number',
      'fecha_inicio'        => 'Date',
      'fecha_finalizacion'  => 'Date',
      'Curso_id'            => 'ForeignKey',
      'Institucion_id'      => 'ForeignKey',
      'PeriodoAcademico_id' => 'ForeignKey',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
