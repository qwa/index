<?php
namespace PkgIndex\Model;
use LazyRecord\BaseCollection;
class ReleaseCollectionBase
    extends BaseCollection
{
    const SCHEMA_PROXY_CLASS = 'PkgIndex\\Model\\ReleaseSchemaProxy';
    const MODEL_CLASS = 'PkgIndex\\Model\\Release';
    const TABLE = 'releases';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
}
