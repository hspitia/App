<?php

/**
 * BasePeriodoAcademico
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $codigo
 * @property date $inicio
 * @property date $fin
 * @property string $comentarios
 * @property integer $Calendario_id
 * @property Calendario $Calendario
 * @property Doctrine_Collection $CursosProgramados
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method string              getCodigo()            Returns the current record's "codigo" value
 * @method date                getInicio()            Returns the current record's "inicio" value
 * @method date                getFin()               Returns the current record's "fin" value
 * @method string              getComentarios()       Returns the current record's "comentarios" value
 * @method integer             getCalendarioId()      Returns the current record's "Calendario_id" value
 * @method Calendario          getCalendario()        Returns the current record's "Calendario" value
 * @method Doctrine_Collection getCursosProgramados() Returns the current record's "CursosProgramados" collection
 * @method PeriodoAcademico    setId()                Sets the current record's "id" value
 * @method PeriodoAcademico    setCodigo()            Sets the current record's "codigo" value
 * @method PeriodoAcademico    setInicio()            Sets the current record's "inicio" value
 * @method PeriodoAcademico    setFin()               Sets the current record's "fin" value
 * @method PeriodoAcademico    setComentarios()       Sets the current record's "comentarios" value
 * @method PeriodoAcademico    setCalendarioId()      Sets the current record's "Calendario_id" value
 * @method PeriodoAcademico    setCalendario()        Sets the current record's "Calendario" value
 * @method PeriodoAcademico    setCursosProgramados() Sets the current record's "CursosProgramados" collection
 * 
 * @package    siglo21
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePeriodoAcademico extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('periodo_academico');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('codigo', 'string', 15, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => 15,
             ));
        $this->hasColumn('inicio', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('fin', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('comentarios', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('Calendario_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));


        $this->index('fk_PeriodoAcademico_Calendario1', array(
             'fields' => 
             array(
              0 => 'Calendario_id',
             ),
             ));
        $this->option('charset', 'latin1');
        $this->option('collate', 'latin1_spanish_ci');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Calendario', array(
             'local' => 'Calendario_id',
             'foreign' => 'id',
             'onDelete' => 'cascade',
             'onUpdate' => 'cascade'));

        $this->hasMany('CursoProgramado as CursosProgramados', array(
             'local' => 'id',
             'foreign' => 'PeriodoAcademico_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}