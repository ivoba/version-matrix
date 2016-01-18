<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use VersionMatrix\Analyzer\Analyzer;
use VersionMatrix\Entity\Config;
use VersionMatrix\Entity\Config\Project;
use VersionMatrix\Loader\FromFileLoader;
use VersionMatrix\VersionMatrix;

class VersionMatrixCommand extends Command
{

    protected function configure()
    {
        $this
            ->setName('version-matrix:render')
            ->setDescription('Render the matrix')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $config = new Config(
            [
                new Project('project/one'),
                new Project('project/two'),
            ]
        );

        //todo read config & make test config
        $loaders = ['default' => new FromFileLoader(__DIR__.'/../../VersionMatrix/Tests/Fixtures/')];

        $analyzer = new Analyzer();
        $versionMatrix = new VersionMatrix($config, $analyzer, $loaders);
        $versionMatrix->load();

        $matrix = $versionMatrix->getMatrix();
        $rows = [];

        foreach ($matrix['rows_title'] as $rowTitle) {
            $row = [$rowTitle];
            foreach ($matrix['matrix'][$rowTitle] as $dep) {
                $row[] = $dep->getVersion();
            }

            $rows[] =  $row;
        }

        $table = new Table($output);
        $table
            ->setHeaders($matrix['cols_title'])
            ->setRows($rows)
        ;
        $table->render();
    }
}