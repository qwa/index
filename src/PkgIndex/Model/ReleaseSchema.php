<?php
namespace PkgIndex\Model;
use LazyRecord\Schema\DeclareSchema;

class ReleaseSchema extends DeclareSchema
{
    public function schema()
    {
        $this->column('package_id')
            ->integer()
            ->unsigned()
            ->refer('Package')
            ;

        $this->column('version')
            ->varchar(18)
            ;

        $this->belongsTo('package', 'Package')
            ->by('package_id')
            ->usingIndex(true)
            ;
    }
}
