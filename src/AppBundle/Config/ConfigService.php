<?php

namespace AppBundle\Config;

use VersionMatrix\Entity\Config;

/**
 * Class ConfigService
 * @package AppBundle\Config
 */
class ConfigService
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var Config\Loaders
     */
    private $loaders;

    /**
     * @param $projects
     * @param $loaders
     */
    public function __construct($projects, $loaders)
    {
        $projectsArray = [];
        foreach ($projects as $project) {
            $projectsArray[] = new Config\Project($project['name']);
        }
        $this->config = new Config($projectsArray);
        $this->loaders = new Config\Loaders($loaders);
    }

    /**
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return Config\Loaders
     */
    public function getLoaders()
    {
        return $this->loaders;
    }

}