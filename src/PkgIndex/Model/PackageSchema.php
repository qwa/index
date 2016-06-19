<?php
namespace PkgIndex\Model;
use LazyRecord\Schema\DeclareSchema;

class PackageSchema extends DeclareSchema
{
    public function schema()
    {
        $this->column('vendor_name')
            ->varchar(30)
            ;
        $this->column('package_name')
            ->varchar(30)
            ;
        $this->column('package_type')
            ->varchar(30)
            ;
        $this->hasMany('releases', 'PkgIndex\Model\ReleaseSchema', 'package_id', 'id');
    }
}




