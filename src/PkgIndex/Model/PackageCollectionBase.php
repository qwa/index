<?php
namespace PkgIndex\Model;
use LazyRecord\BaseCollection;
class PackageCollectionBase
    extends BaseCollection
{
    const SCHEMA_PROXY_CLASS = 'PkgIndex\\Model\\PackageSchemaProxy';
    const MODEL_CLASS = 'PkgIndex\\Model\\Package';
    const TABLE = 'packages';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
}
