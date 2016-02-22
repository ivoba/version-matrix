<?php

namespace AppBundle\Config;

use VersionMatrix\Entity\Config;

/**
 * Class ConfigFactory
 * @package AppBundle\Config
 */
class ConfigFactory
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @param array $projects
     */
    public function __construct(array $projects)
    {
        $projectsArray = [];
        foreach ($projects as $project) {
            $loader = new $project['loader']( ...$project['arguments'] );
            $projectsArray[] = new Config\Project(
                $project['name'],
                $loader
            );
        }
        $this->config = new Config($projectsArray);
    }

    /**
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }

}