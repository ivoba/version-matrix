<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 19.01.16
 * Time: 11:42
 */

namespace VersionMatrix\Entity\Config;

use VersionMatrix\Exception\NoSuchLoaderException;
use VersionMatrix\Loader\LoaderInterface;

class Loaders
{

    private $map;

    /**
     * @param array $map
     */
    public function __construct(array $map)
    {
        foreach ($map as $key => $loader) {
            $this->addLoader($key, $loader);
        }

    }

    public function addLoader($key, LoaderInterface $loader)
    {
        $this->map[$key] = $loader;
    }

    public function getLoader($key)
    {
        if (isset($this->map[$key])) {
            return $this->map[$key];
        }

        throw new NoSuchLoaderException($key.' is not a valid loader');
    }
}