<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 14.01.16
 * Time: 16:14
 */

namespace VersionMatrix\Entity;

use VersionMatrix\Entity\Config\Project;

class Config
{
    private $projects = [];

    /**
     * Config constructor.
     * @param $projects
     */
    public function __construct(array $projects = [])
    {
        foreach ($projects as $project) {
            $this->addProject($project);
        }
    }

    public function addProject(Project $project)
    {
        $code = $project->getTitle();

        if (array_key_exists($code, $this->projects)) {
            //todo custom Exception
            throw new \Exception('project with same name already exists');
        }

        $this->projects[$code] = $project;
    }

    /**
     * @return array[Project]
     */
    public function getProjects()
    {
        return $this->projects;
    }

}