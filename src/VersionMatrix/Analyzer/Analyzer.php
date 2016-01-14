<?php

namespace VersionMatrix\Analyzer;

use chippyash\Matrix\Matrix;

class Analyzer
{

    public function analyze($json)
    {
        $data = [];
        foreach ($json->packages as $package) {
            $data[$package->name] = $package->version;
        }

        return $data;
    }

}