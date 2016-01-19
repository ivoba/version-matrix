<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use VersionMatrix\Entity\Config;

class VersionMatrixCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('version-matrix:render')
            ->setDescription('Render the matrix');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $versionMatrix = $this->getContainer()->get('version_matrix.matrix');
        $versionMatrix->load();

        $matrix = $versionMatrix->getMatrix();
        $rows = [];

        foreach ($matrix['rows_title'] as $rowTitle) {
            $row = [$rowTitle];
            foreach ($matrix['matrix'][$rowTitle] as $dep) {
                $row[] = $dep->getVersion();
            }

            $rows[] = $row;
        }

        $table = new Table($output);
        $table
            ->setHeaders($matrix['cols_title'])
            ->setRows($rows);
        $table->render();
    }
}