<?php

namespace VersionMatrix\Analyzer;

use VersionMatrix\Entity\Matrix\Dependency;

class Analyzer
{

    public function analyze($json)
    {
        $deps = [];
        foreach ($json->packages as $package) {
            $deps[] = new Dependency(
                $package->name,
                $package->version,
                $package->source->url,
                $package->source->reference
                );
        }

        return $deps;
    }

}