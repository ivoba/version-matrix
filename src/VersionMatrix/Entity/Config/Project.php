<?php

namespace VersionMatrix\Entity\Config;

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
     * @var string
     */
    private $loader;

    /**
     * Project constructor.
     * @param string $title
     * @param string $loader
     */
    public function __construct($title, $loader = 'default')
    {
        $this->title = $title;
        $this->loader = $loader;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getLoader()
    {
        return $this->loader;
    }

}