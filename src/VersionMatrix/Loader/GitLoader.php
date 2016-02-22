<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 18.02.16
 * Time: 16:37
 */

namespace VersionMatrix\Loader;


use VersionMatrix\Entity\Config\Project;

class GitLoader implements LoaderInterface
{
    public function load(Project $project)
    {
        if($project->getLoader()){

        }
    }

}