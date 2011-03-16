<?php

/**
 * BaseCurso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $codigo
 * @property string $nombre
 * @property string $nombre_corto
 * @property string $descripcion
 * @property integer $Servicio_id
 * @property Servicio $Servicio
 * @property Doctrine_Collection $CursosProgramados
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method string              getCodigo()            Returns the current record's "codigo" value
 * @method string              getNombre()            Returns the current record's "nombre" value
 * @method string              getNombreCorto()       Returns the current record's "nombre_corto" value
 * @method string              getDescripcion()       Returns the current record's "descripcion" value
 * @method integer             getServicioId()        Returns the current record's "Servicio_id" value
 * @method Servicio            getServicio()          Returns the current record's "Servicio" value
 * @method Doctrine_Collection getCursosProgramados() Returns the current record's "CursosProgramados" collection
 * @method Curso               setId()                Sets the current record's "id" value
 * @method Curso               setCodigo()            Sets the current record's "codigo" value
 * @method Curso               setNombre()            Sets the current record's "nombre" value
 * @method Curso               setNombreCorto()       Sets the current record's "nombre_corto" value
 * @method Curso               setDescripcion()       Sets the current record's "descripcion" value
 * @method Curso               setServicioId()        Sets the current record's "Servicio_id" value
 * @method Curso               setServicio()          Sets the current record's "Servicio" value
 * @method Curso               setCursosProgramados() Sets the current record's "CursosProgramados" collection
 * 
 * @package    siglo21
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCurso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('curso');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('codigo', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('nombre', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 128,
             ));
        $this->hasColumn('nombre_corto', 'string', 60, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 60,
             ));
        $this->hasColumn('descripcion', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('Servicio_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));


        $this->index('fk_Curso_Servicio1', array(
             'fields' => 
             array(
              0 => 'Servicio_id',
             ),
             ));
        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Servicio', array(
             'local' => 'Servicio_id',
             'foreign' => 'id',
             'onDelete' => 'cascade',
             'onUpdate' => 'cascade'));

        $this->hasMany('CursoProgramado as CursosProgramados', array(
             'local' => 'id',
             'foreign' => 'Curso_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'nombre_corto',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}