<?php
namespace PkgIndex\Model;
use LazyRecord\Schema\SchemaLoader;
use LazyRecord\Result;
use SQLBuilder\Bind;
use SQLBuilder\ArgumentArray;
use PDO;
use SQLBuilder\Universal\Query\InsertQuery;
use LazyRecord\BaseModel;
class ReleaseBase
    extends BaseModel
{
    const SCHEMA_CLASS = 'PkgIndex\\Model\\ReleaseSchema';
    const SCHEMA_PROXY_CLASS = 'PkgIndex\\Model\\ReleaseSchemaProxy';
    const COLLECTION_CLASS = 'PkgIndex\\Model\\ReleaseCollection';
    const MODEL_CLASS = 'PkgIndex\\Model\\Release';
    const TABLE = 'releases';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
    const FIND_BY_PRIMARY_KEY_SQL = 'SELECT * FROM releases WHERE id = :id LIMIT 1';
    public static $column_names = array (
      0 => 'id',
      1 => 'package_id',
      2 => 'version',
    );
    public static $column_hash = array (
      'id' => 1,
      'package_id' => 1,
      'version' => 1,
    );
    public static $mixin_classes = array (
    );
    protected $table = 'releases';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public function getSchema()
    {
        if ($this->_schema) {
           return $this->_schema;
        }
        return $this->_schema = SchemaLoader::load('PkgIndex\\Model\\ReleaseSchemaProxy');
    }
    public function getId()
    {
            return $this->get('id');
    }
    public function getPackageId()
    {
            return $this->get('package_id');
    }
    public function getVersion()
    {
            return $this->get('version');
    }
}
