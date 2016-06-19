<?php
namespace PkgIndex\Model;
use LazyRecord\Schema\DeclareSchema;

class PackageSchema extends DeclareSchema
{
    public function schema()
    {
        $this->column('vendor')
            ->varchar(30)
            ;

        $this->column('name')
            ->varchar(30)
            ;

        $this->column('package_system')
            ->varchar(30)
            ;

        $this->column('package_system_source')
            ->varchar(60)
            ;

        $this->column('url')
            ->varchar(255)
            ;

        $this->hasMany('releases', 'PkgIndex\Model\ReleaseSchema', 'package_id', 'id');
    }
}




