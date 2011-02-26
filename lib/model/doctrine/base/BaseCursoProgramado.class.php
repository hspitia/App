<?php

/**
 * BaseCursoProgramado
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $grado
 * @property string $descripcion
 * @property date $fecha_inicio
 * @property date $fecha_finalizacion
 * @property integer $Curso_id
 * @property integer $Institucion_id
 * @property integer $Programacion_id
 * @property Curso $Curso
 * @property Institucion $Institucion
 * @property Programacion $Programacion
 * @property Doctrine_Collection $Asistencias
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method integer             getGrado()              Returns the current record's "grado" value
 * @method string              getDescripcion()        Returns the current record's "descripcion" value
 * @method date                getFechaInicio()        Returns the current record's "fecha_inicio" value
 * @method date                getFechaFinalizacion()  Returns the current record's "fecha_finalizacion" value
 * @method integer             getCursoId()            Returns the current record's "Curso_id" value
 * @method integer             getInstitucionId()      Returns the current record's "Institucion_id" value
 * @method integer             getProgramacionId()     Returns the current record's "Programacion_id" value
 * @method Curso               getCurso()              Returns the current record's "Curso" value
 * @method Institucion         getInstitucion()        Returns the current record's "Institucion" value
 * @method Programacion        getProgramacion()       Returns the current record's "Programacion" value
 * @method Doctrine_Collection getAsistencias()        Returns the current record's "Asistencias" collection
 * @method CursoProgramado     setId()                 Sets the current record's "id" value
 * @method CursoProgramado     setGrado()              Sets the current record's "grado" value
 * @method CursoProgramado     setDescripcion()        Sets the current record's "descripcion" value
 * @method CursoProgramado     setFechaInicio()        Sets the current record's "fecha_inicio" value
 * @method CursoProgramado     setFechaFinalizacion()  Sets the current record's "fecha_finalizacion" value
 * @method CursoProgramado     setCursoId()            Sets the current record's "Curso_id" value
 * @method CursoProgramado     setInstitucionId()      Sets the current record's "Institucion_id" value
 * @method CursoProgramado     setProgramacionId()     Sets the current record's "Programacion_id" value
 * @method CursoProgramado     setCurso()              Sets the current record's "Curso" value
 * @method CursoProgramado     setInstitucion()        Sets the current record's "Institucion" value
 * @method CursoProgramado     setProgramacion()       Sets the current record's "Programacion" value
 * @method CursoProgramado     setAsistencias()        Sets the current record's "Asistencias" collection
 * 
 * @package    siglo21
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCursoProgramado extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('curso_programado');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('grado', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('descripcion', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 128,
             ));
        $this->hasColumn('fecha_inicio', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('fecha_finalizacion', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('Curso_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('Institucion_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('Programacion_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));


        $this->index('fk_CursoProgramado_Curso1', array(
             'fields' => 
             array(
              0 => 'Curso_id',
             ),
             ));
        $this->index('fk_CursoProgramado_Institucion1', array(
             'fields' => 
             array(
              0 => 'Institucion_id',
             ),
             ));
        $this->index('fk_CursoProgramado_Programacion1', array(
             'fields' => 
             array(
              0 => 'Programacion_id',
             ),
             ));
        $this->option('charset', 'latin1');
        $this->option('collate', 'latin1_spanish_ci');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Curso', array(
             'local' => 'Curso_id',
             'foreign' => 'id',
             'onDelete' => 'cascade',
             'onUpdate' => 'cascade'));

        $this->hasOne('Institucion', array(
             'local' => 'Institucion_id',
             'foreign' => 'id',
             'onDelete' => 'cascade',
             'onUpdate' => 'cascade'));

        $this->hasOne('Programacion', array(
             'local' => 'Programacion_id',
             'foreign' => 'id',
             'onDelete' => 'cascade',
             'onUpdate' => 'cascade'));

        $this->hasMany('Asistencia as Asistencias', array(
             'local' => 'id',
             'foreign' => 'CursoProgramado_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}