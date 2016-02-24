<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 19.01.16
 * Time: 11:32
 */

namespace VersionMatrix\Loader;

/**
 * Interface LoaderInterface
 * @package VersionMatrix\Loader
 */
interface LoaderInterface
{
    /**
     * @return mixed
     */
    public function load();
}