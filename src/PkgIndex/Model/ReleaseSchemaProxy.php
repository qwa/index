<?php
namespace PkgIndex\Model;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\RuntimeColumn;
use LazyRecord\Schema\Relationship\Relationship;
class ReleaseSchemaProxy
    extends RuntimeSchema
{
    const schema_class = 'PkgIndex\\Model\\ReleaseSchema';
    const model_name = 'Release';
    const model_namespace = 'PkgIndex\\Model';
    const COLLECTION_CLASS = 'PkgIndex\\Model\\ReleaseCollection';
    const MODEL_CLASS = 'PkgIndex\\Model\\Release';
    const PRIMARY_KEY = 'id';
    const TABLE = 'releases';
    const LABEL = 'Release';
    public static $column_hash = array (
      'id' => 1,
      'package_id' => 1,
      'version' => 1,
    );
    public static $mixin_classes = array (
    );
    public $columnNames = array (
      0 => 'id',
      1 => 'package_id',
      2 => 'version',
    );
    public $primaryKey = 'id';
    public $columnNamesIncludeVirtual = array (
      0 => 'id',
      1 => 'package_id',
      2 => 'version',
    );
    public $label = 'Release';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public $relations;
    public function __construct()
    {
        $this->relations = array( 
      'package' => \LazyRecord\Schema\Relationship\BelongsTo::__set_state(array( 
      'data' => array( 
          'type' => 3,
          'self_schema' => 'PkgIndex\\Model\\ReleaseSchema',
          'self_column' => 'package_id',
          'foreign_schema' => 'PkgIndex\\Model\\PackageSchema',
          'foreign_column' => 'id',
        ),
      'accessor' => 'package',
      'where' => NULL,
      'orderBy' => array( 
        ),
      'onUpdate' => NULL,
      'onDelete' => NULL,
      'usingIndex' => NULL,
    )),
    );
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
        $this->columns[ 'package_id' ] = new RuntimeColumn('package_id',array( 
      'locales' => NULL,
      'attributes' => array( 
          'refer' => 'PkgIndex\\Model\\PackageSchema',
          'length' => NULL,
        ),
      'name' => 'package_id',
      'primary' => NULL,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'refer' => 'PkgIndex\\Model\\PackageSchema',
      'length' => NULL,
    ));
        $this->columns[ 'version' ] = new RuntimeColumn('version',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 18,
        ),
      'name' => 'version',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 18,
    ));
    }
}
