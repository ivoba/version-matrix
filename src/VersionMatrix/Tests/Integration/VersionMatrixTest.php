<?php

namespace VersionMatrix\Tests\VersionMatrix;

use VersionMatrix\Analyzer\Analyzer;
use VersionMatrix\Entity\Config;
use VersionMatrix\Entity\Config\Project;
use VersionMatrix\Loader\FileLoader;
use VersionMatrix\Loader\FromFileLoader;
use VersionMatrix\VersionMatrix;
use VersionMatrix\Entity\Matrix;

class VersionMatrixTest extends \PHPUnit_Framework_TestCase
{
    public function testVersionMatrix()
    {

        $config = new Config(
            [
                new Project('project/one', new FileLoader(__DIR__.'/../Fixtures/', 'project_one/composer.lock')),
                new Project('project/two', new FileLoader(__DIR__.'/../Fixtures/', 'project_two/composer.lock')),
            ]
        );

        $analyzer = new Analyzer();
        $versionMatrix = new VersionMatrix($config, $analyzer);
        $versionMatrix->load();
        $matrix = $versionMatrix->getMatrix();
        $data = $versionMatrix->getData();

        $this->assertInstanceOf(Matrix::class, $matrix);
        $this->assertInternalType('array', $data);
        $this->assertCount(3, $data['cols_title']);
    }

}
