<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 14.01.16
 * Time: 16:11
 */

namespace VersionMatrix;

use VersionMatrix\Entity\Config;

class VersionMatrix
{
    private $config;
    private $analyzer;
    private $loaders;
    private $formatters;
    private $matrix;

    /**
     * VersionMatrix constructor.
     * @param $config
     * @param $analyser
     * @param $loaders
     * @param $formatters
     */
    public function __construct(Config $config, $analyzer, $loaders, $formatters = null)
    {
        $this->config = $config;
        $this->analyzer = $analyzer;
        $this->loaders = $loaders;
        $this->formatters = $formatters;
    }

    public function load()
    {
        $projects = $this->config->getProjects();

        $matrixData = [];

        foreach ($projects as $project) {
            $json = $this->loaders[$project->getLoader()]->load($project);

            if($json){
                $data = $this->analyzer->analyze($json);
                $matrixData[$project->getTitle()] = $data;
            }
        }

        $this->matrix = new Matrix($matrixData);
    }

    public function getMatrix()
    {
        return $this->matrix;
    }

}