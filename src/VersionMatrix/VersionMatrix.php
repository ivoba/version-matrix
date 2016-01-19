<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 14.01.16
 * Time: 16:11
 */

namespace VersionMatrix;

use VersionMatrix\Analyzer\Analyzer;
use VersionMatrix\Entity\Config;
use VersionMatrix\Entity\Matrix;
use VersionMatrix\Exception\NotFoundException;

class VersionMatrix
{
    private $config;
    private $analyzer;
    private $loaders;
    private $formatters;
    private $matrix;

    /**
     * @param Config $config
     * @param Analyzer $analyzer
     * @param Config\Loaders $loaders
     * @param null $formatters
     */
    public function __construct(Config $config, Analyzer $analyzer, Config\Loaders $loaders, $formatters = null)
    {
        $this->config = $config;
        $this->analyzer = $analyzer;
        $this->loaders = $loaders;
        $this->formatters = $formatters;
    }

    public function load()
    {
        $projects = $this->config->getProjects();

        $projectData = [];

        foreach ($projects as $project) {
            $json = $this->loaders->getLoader($project->getLoader())->load($project);

            if ($json) {
                $dependencies = $this->analyzer->analyze($json);
                $projectData[] = new Matrix\Project($project->getTitle(), $dependencies);
            }
        }

        $this->matrix = new Matrix($projectData);
    }

    public function getMatrix()
    {
        return $this->toMatrix();
    }

    public function getData()
    {
        return $this->matrix;
    }

    protected function toMatrix()
    {
        $matrix = [
            'cols_title' => ['X' => '#'],
            'rows_title' => [],
            'matrix'     => [],
        ];
        foreach ($this->matrix->getData() as $projects) {
            $matrix['cols_title'][$projects->getTitle()] = $projects->getTitle();
            foreach ($projects->getDependencies() as $dep) {
                $matrix['rows_title'][$dep->getTitle()] = $dep->getTitle();
            }
        }

        foreach ($matrix['rows_title'] as $title) {
            $dependency = [];
            foreach ($this->matrix->getData() as $projects) {
                try {
                    $dependency[] = $projects->getDependencyByTitle($title);
                } catch (NotFoundException $e) {
                    $dependency[] = null;
                }
            }
            $matrix['matrix'][$title] = $dependency;
        }

        return $matrix;
    }

}