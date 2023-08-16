<?php

namespace Codilar\Session\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Import extends Command
{

    /**
     * {@inheritdoc}
     */
    protected function execute(
        InputInterface  $input,
        OutputInterface $output
    )
    {
        var_dump('sdfs');
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName("demo:import");
        $this->setDescription("Import data from csv file");
        parent::configure();
    }
}
