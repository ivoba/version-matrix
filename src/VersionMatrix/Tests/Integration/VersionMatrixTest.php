<?php
/**
 * Created by PhpStorm.
 * User: ivo
 * Date: 14.01.16
 * Time: 16:19
 */

namespace VersionMatrix\Tests\VersionMatrix;


use VersionMatrix\Analyzer\Analyzer;
use VersionMatrix\Entity\Config;
use VersionMatrix\Entity\Project;
use VersionMatrix\Loader\FromFileLoader;
use VersionMatrix\VersionMatrix;

use chippyash\Matrix\Formatter\Ascii;
use chippyash\Matrix\Matrix;

class VersionMatrixTest extends \PHPUnit_Framework_TestCase
{
    public function testVersionMatrix()
    {

        $mA = new Matrix(
            [
                [1,2,3],
                ['a','b','c'],
                [true, false, 'foo']
            ]);
        echo $mA->setFormatter(new Ascii())->display();
        exit;

        $config = new Config([
            new Project('project/one')
        ]);

        $loaders = ['default' => new FromFileLoader(__DIR__ . '/../Fixtures/')];

        $analyzer = new Analyzer();
        $versionMatrix = new VersionMatrix($config, $analyzer, $loaders);
        $versionMatrix->load();

    }

}
