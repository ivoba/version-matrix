<?php

namespace VersionMatrix\Renderer;

use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\OutputInterface;
use VersionMatrix\Entity\Matrix;

class ConsoleRenderer
{

    public function render(OutputInterface $output, Matrix $matrix)
    {
        $headers = [];


        $table = new Table($output);
        $table
            ->setHeaders(array('ISBN', 'Title', 'Author'))
            ->setRows(array(
                array('99921-58-10-7', 'Divine Comedy', 'Dante Alighieri'),
                array('9971-5-0210-0', 'A Tale of Two Cities', 'Charles Dickens'),
                array('960-425-059-0', 'The Lord of the Rings', 'J. R. R. Tolkien'),
                array('80-902734-1-6', 'And Then There Were None', 'Agatha Christie'),
            ))
        ;
        $table->render();
    }
}