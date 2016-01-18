<?php

namespace VersionMatrix\Entity\Matrix;

use VersionMatrix\Exception\NotFoundException;

/**
 * Class Project
 * @package VersionMatrix\Entity\Matrix
 */
class Project
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var array
     */
    private $dependencies = [];

    /**
     * Project constructor.
     * @param string $title
     * @param array $dependencies
     */
    public function __construct($title, array $dependencies)
    {
        $this->title = $title;
        foreach ($dependencies as $dep) {
            $this->addDependency($dep);
        }

    }

    /**
     * @param Dependency $dependency
     */
    public function addDependency(Dependency $dependency)
    {
        $this->dependencies[$dependency->getTitle()] = $dependency;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return array
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * @param $title
     * @return Dependency
     * @throws NotFoundException
     */
    public function getDependencyByTitle($title)
    {
        if(isset($this->dependencies[$title])){
            return $this->dependencies[$title];
        }

        throw new NotFoundException($title . ' not found');
    }

}