<?php

namespace VersionMatrix\Entity\Config;

use VersionMatrix\Loader\LoaderInterface;

/**
 * Class Project
 * @package VersionMatrix\Entity\Config
 */
class Project
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var LoaderInterface
     */
    private $loader;
    /**
     * @var
     */
    private $options;

    /**
     * @param $title
     * @param LoaderInterface $loader
     * @param array|null $options
     */
    public function __construct($title, LoaderInterface $loader, array $options = null)
    {
        $this->title = $title;
        $this->loader = $loader;
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return LoaderInterface
     */
    public function getLoader()
    {
        return $this->loader;
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

}