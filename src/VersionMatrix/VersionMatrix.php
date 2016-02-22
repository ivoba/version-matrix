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

    const COLS_ARRAY_KEY = 'cols_title';
    const ROWS_ARRAY_KEY = 'rows_title';
    const MATRIX_ARRAY_KEY = 'matrix';

    private $config;
    private $analyzer;
    private $formatters;
    private $matrix;

    /**
     * @param Config $config
     * @param Analyzer $analyzer
     * @param null $formatters
     */
    public function __construct(Config $config, Analyzer $analyzer, $formatters = null)
    {
        $this->config = $config;
        $this->analyzer = $analyzer;
        $this->formatters = $formatters;
    }

    public function load()
    {
        $projects = $this->config->getProjects();

        $projectData = [];

        foreach ($projects as $project) {
            $json = $project->getLoader()->load($project);

            if ($json) {
                $dependencies = $this->analyzer->analyze($json);
                $projectData[] = new Matrix\Project($project->getTitle(), $dependencies);
            }
        }

        $this->matrix = new Matrix($projectData);
    }

    public function getMatrix()
    {
        return $this->matrix;
    }

    public function getData()
    {
        return $this->toMatrix();
    }

    protected function toMatrix()
    {
        $matrix = [
            self::COLS_ARRAY_KEY => ['X' => '#'],
            self::ROWS_ARRAY_KEY => [],
            self::MATRIX_ARRAY_KEY     => [],
        ];
        foreach ($this->matrix->getData() as $projects) {
            $matrix['cols_title'][$projects->getTitle()] = $projects->getTitle();
            foreach ($projects->getDependencies() as $dep) {
                $matrix['rows_title'][$dep->getTitle()] = $dep->getTitle();
            }
        }

        foreach ($matrix[self::COLS_ARRAY_KEY] as $title) {
            $dependency = [];
            foreach ($this->matrix->getData() as $projects) {
                try {
                    $dependency[] = $projects->getDependencyByTitle($title);
                } catch (NotFoundException $e) {
                    $dependency[] = null;
                }
            }
            $matrix[self::MATRIX_ARRAY_KEY][$title] = $dependency;
        }

        return $matrix;
    }

}