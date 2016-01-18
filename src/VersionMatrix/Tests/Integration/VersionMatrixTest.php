<?php

namespace VersionMatrix\Tests\VersionMatrix;

use VersionMatrix\Analyzer\Analyzer;
use VersionMatrix\Entity\Config;
use VersionMatrix\Entity\Config\Project;
use VersionMatrix\Loader\FromFileLoader;
use VersionMatrix\Renderer\ConsoleRenderer;
use VersionMatrix\VersionMatrix;

class VersionMatrixTest extends \PHPUnit_Framework_TestCase
{
    public function testVersionMatrix()
    {

        $config = new Config(
            [
                new Project('project/one'),
                new Project('project/two'),
            ]
        );

        $loaders = ['default' => new FromFileLoader(__DIR__.'/../Fixtures/')];

        $analyzer = new Analyzer();
        $versionMatrix = new VersionMatrix($config, $analyzer, $loaders);
        $versionMatrix->load();
        $matrix = $versionMatrix->getMatrix();
        dump($matrix);

        $renderer = new ConsoleRenderer();


    }

}
