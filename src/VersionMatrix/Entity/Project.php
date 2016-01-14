<?php

namespace VersionMatrix\Entity;

class Project
{
    private $title;
    private $loader;

    /**
     * Project constructor.
     * @param $title
     * @param $loader
     */
    public function __construct($title, $loader = 'default')
    {
        $this->title = $title;
        $this->loader = $loader;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getLoader()
    {
        return $this->loader;
    }

}