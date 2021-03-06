<?php

/**
 * BaseInstitucion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property string $nombre_corto
 * @property string $direccion_1
 * @property string $direccion_2
 * @property string $telefono_1
 * @property string $telefono_2
 * @property string $fax
 * @property string $email
 * @property string $web
 * @property integer $TipoInstitucion_id
 * @property integer $Municipio_id
 * @property TipoInstitucion $TipoInstitucion
 * @property Municipio $Municipio
 * @property Doctrine_Collection $Estudiantes
 * @property Doctrine_Collection $CursosProgramados
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method string              getNombre()             Returns the current record's "nombre" value
 * @method string              getNombreCorto()        Returns the current record's "nombre_corto" value
 * @method string              getDireccion1()         Returns the current record's "direccion_1" value
 * @method string              getDireccion2()         Returns the current record's "direccion_2" value
 * @method string              getTelefono1()          Returns the current record's "telefono_1" value
 * @method string              getTelefono2()          Returns the current record's "telefono_2" value
 * @method string              getFax()                Returns the current record's "fax" value
 * @method string              getEmail()              Returns the current record's "email" value
 * @method string              getWeb()                Returns the current record's "web" value
 * @method integer             getTipoInstitucionId()  Returns the current record's "TipoInstitucion_id" value
 * @method integer             getMunicipioId()        Returns the current record's "Municipio_id" value
 * @method TipoInstitucion     getTipoInstitucion()    Returns the current record's "TipoInstitucion" value
 * @method Municipio           getMunicipio()          Returns the current record's "Municipio" value
 * @method Doctrine_Collection getEstudiantes()        Returns the current record's "Estudiantes" collection
 * @method Doctrine_Collection getCursosProgramados()  Returns the current record's "CursosProgramados" collection
 * @method Institucion         setId()                 Sets the current record's "id" value
 * @method Institucion         setNombre()             Sets the current record's "nombre" value
 * @method Institucion         setNombreCorto()        Sets the current record's "nombre_corto" value
 * @method Institucion         setDireccion1()         Sets the current record's "direccion_1" value
 * @method Institucion         setDireccion2()         Sets the current record's "direccion_2" value
 * @method Institucion         setTelefono1()          Sets the current record's "telefono_1" value
 * @method Institucion         setTelefono2()          Sets the current record's "telefono_2" value
 * @method Institucion         setFax()                Sets the current record's "fax" value
 * @method Institucion         setEmail()              Sets the current record's "email" value
 * @method Institucion         setWeb()                Sets the current record's "web" value
 * @method Institucion         setTipoInstitucionId()  Sets the current record's "TipoInstitucion_id" value
 * @method Institucion         setMunicipioId()        Sets the current record's "Municipio_id" value
 * @method Institucion         setTipoInstitucion()    Sets the current record's "TipoInstitucion" value
 * @method Institucion         setMunicipio()          Sets the current record's "Municipio" value
 * @method Institucion         setEstudiantes()        Sets the current record's "Estudiantes" collection
 * @method Institucion         setCursosProgramados()  Sets the current record's "CursosProgramados" collection
 * 
 * @package    siglo21
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseInstitucion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('institucion');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('nombre_corto', 'string', 60, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 60,
             ));
        $this->hasColumn('direccion_1', 'string', 80, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 80,
             ));
        $this->hasColumn('direccion_2', 'string', 80, array(
             'type' => 'string',
             'length' => 80,
             ));
        $this->hasColumn('telefono_1', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('telefono_2', 'string', 45, array(
             'type' => 'string',
             'length' => 45,
             ));
        $this->hasColumn('fax', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('email', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 128,
             ));
        $this->hasColumn('web', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('TipoInstitucion_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('Municipio_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));


        $this->index('fk_Institucion_TipoInstitucion1', array(
             'fields' => 
             array(
              0 => 'TipoInstitucion_id',
             ),
             ));
        $this->index('fk_Institucion_Municipio1', array(
             'fields' => 
             array(
              0 => 'Municipio_id',
             ),
             ));
        $this->option('collate', 'latin1_spanish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TipoInstitucion', array(
             'local' => 'TipoInstitucion_id',
             'foreign' => 'id',
             'onDelete' => 'cascade',
             'onUpdate' => 'cascade'));

        $this->hasOne('Municipio', array(
             'local' => 'Municipio_id',
             'foreign' => 'id',
             'onDelete' => 'cascade',
             'onUpdate' => 'cascade'));

        $this->hasMany('Estudiante as Estudiantes', array(
             'local' => 'id',
             'foreign' => 'Institucion_id'));

        $this->hasMany('CursoProgramado as CursosProgramados', array(
             'local' => 'id',
             'foreign' => 'Institucion_id'));

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