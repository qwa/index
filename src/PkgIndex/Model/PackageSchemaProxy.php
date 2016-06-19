<?php
namespace PkgIndex\Model;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\RuntimeColumn;
use LazyRecord\Schema\Relationship\Relationship;
class PackageSchemaProxy
    extends RuntimeSchema
{
    const schema_class = 'PkgIndex\\Model\\PackageSchema';
    const model_name = 'Package';
    const model_namespace = 'PkgIndex\\Model';
    const COLLECTION_CLASS = 'PkgIndex\\Model\\PackageCollection';
    const MODEL_CLASS = 'PkgIndex\\Model\\Package';
    const PRIMARY_KEY = 'id';
    const TABLE = 'packages';
    const LABEL = 'Package';
    public static $column_hash = array (
      'id' => 1,
      'vendor_name' => 1,
      'package_name' => 1,
      'package_type' => 1,
    );
    public static $mixin_classes = array (
    );
    public $columnNames = array (
      0 => 'id',
      1 => 'vendor_name',
      2 => 'package_name',
      3 => 'package_type',
    );
    public $primaryKey = 'id';
    public $columnNamesIncludeVirtual = array (
      0 => 'id',
      1 => 'vendor_name',
      2 => 'package_name',
      3 => 'package_type',
    );
    public $label = 'Package';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public $relations;
    public function __construct()
    {
        $this->columns[ 'id' ] = new RuntimeColumn('id',array( 
      'locales' => NULL,
      'attributes' => array( 
          'autoIncrement' => true,
          'renderAs' => 'HiddenInput',
          'widgetAttributes' => array( 
            ),
        ),
      'name' => 'id',
      'primary' => true,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => true,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'autoIncrement' => true,
      'renderAs' => 'HiddenInput',
      'widgetAttributes' => array( 
        ),
    ));
        $this->columns[ 'vendor_name' ] = new RuntimeColumn('vendor_name',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 30,
        ),
      'name' => 'vendor_name',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 30,
    ));
        $this->columns[ 'package_name' ] = new RuntimeColumn('package_name',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 30,
        ),
      'name' => 'package_name',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 30,
    ));
        $this->columns[ 'package_type' ] = new RuntimeColumn('package_type',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 30,
        ),
      'name' => 'package_type',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 30,
    ));
    }
}
