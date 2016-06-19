<?php
namespace PkgIndex\Model;
use LazyRecord\Schema\SchemaLoader;
use LazyRecord\Result;
use SQLBuilder\Bind;
use SQLBuilder\ArgumentArray;
use PDO;
use SQLBuilder\Universal\Query\InsertQuery;
use LazyRecord\BaseModel;
class PackageBase
    extends BaseModel
{
    const SCHEMA_CLASS = 'PkgIndex\\Model\\PackageSchema';
    const SCHEMA_PROXY_CLASS = 'PkgIndex\\Model\\PackageSchemaProxy';
    const COLLECTION_CLASS = 'PkgIndex\\Model\\PackageCollection';
    const MODEL_CLASS = 'PkgIndex\\Model\\Package';
    const TABLE = 'packages';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
    const FIND_BY_PRIMARY_KEY_SQL = 'SELECT * FROM packages WHERE id = :id LIMIT 1';
    public static $column_names = array (
      0 => 'id',
      1 => 'vendor_name',
      2 => 'package_name',
      3 => 'package_type',
    );
    public static $column_hash = array (
      'id' => 1,
      'vendor_name' => 1,
      'package_name' => 1,
      'package_type' => 1,
    );
    public static $mixin_classes = array (
    );
    protected $table = 'packages';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public function getSchema()
    {
        if ($this->_schema) {
           return $this->_schema;
        }
        return $this->_schema = SchemaLoader::load('PkgIndex\\Model\\PackageSchemaProxy');
    }
    public function getId()
    {
            return $this->get('id');
    }
    public function getVendorName()
    {
            return $this->get('vendor_name');
    }
    public function getPackageName()
    {
            return $this->get('package_name');
    }
    public function getPackageType()
    {
            return $this->get('package_type');
    }
}
