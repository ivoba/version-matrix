<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 14.01.16
 * Time: 15:26
 */

namespace VersionMatrix\Entity;

use VersionMatrix\Entity\Matrix\Project;

/**
 * Class Matrix
 * @package VersionMatrix\Entity
 */
class Matrix
{

    /**
     * @var array
     */
    private $data = [];

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        foreach ($data as $project) {
            $this->addProject($project);
        }
    }

    /**
     * @param Project $project
     */
    public function addProject(Project $project)
    {
        $this->data[] = $project;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $name
     * @return array
     */
    function __get($name)
    {
        return $this->getData();
    }


}