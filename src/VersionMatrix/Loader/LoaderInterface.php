<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 19.01.16
 * Time: 11:32
 */

namespace VersionMatrix\Loader;

use VersionMatrix\Entity\Config\Project;

/**
 * Interface LoaderInterface
 * @package VersionMatrix\Loader
 */
interface LoaderInterface
{
    /**
     * @param Project $project
     * @return object json decoded
     */
    public function load(Project $project);
}