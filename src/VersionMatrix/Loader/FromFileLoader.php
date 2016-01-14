<?php

namespace VersionMatrix\Loader;

use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use VersionMatrix\Entity\Project;

class FromFileLoader
{
    private $dir;
    private $name;

    /**
     * FromFileLoader constructor.
     * @param $dir
     */
    public function __construct($dir, $name = 'composer.lock')
    {
        $this->dir = $dir;
        $this->name = $name;
    }


    public function load(Project $project)
    {
        $file = $this->dir.str_replace('/', '_', $project->getTitle()).'/'.$this->name;

        if (!file_exists($file)) {
            throw new FileNotFoundException($file.' was not found.');
        }

        $json = file_get_contents($file);

        return json_decode($json);
    }
}
