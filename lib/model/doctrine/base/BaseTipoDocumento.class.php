<?php

/**
 * BaseTipoDocumento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property Doctrine_Collection $Estudiantes
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getNombre()      Returns the current record's "nombre" value
 * @method string              getDescripcion() Returns the current record's "descripcion" value
 * @method Doctrine_Collection getEstudiantes() Returns the current record's "Estudiantes" collection
 * @method TipoDocumento       setId()          Sets the current record's "id" value
 * @method TipoDocumento       setNombre()      Sets the current record's "nombre" value
 * @method TipoDocumento       setDescripcion() Sets the current record's "descripcion" value
 * @method TipoDocumento       setEstudiantes() Sets the current record's "Estudiantes" collection
 * 
 * @package    siglo21
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipoDocumento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_documento');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 6, array(
             'type' => 'string',
             'length' => 6,
             ));
        $this->hasColumn('descripcion', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             ));

        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Estudiante as Estudiantes', array(
             'local' => 'id',
             'foreign' => 'TipoDocumento_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'nombre',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}