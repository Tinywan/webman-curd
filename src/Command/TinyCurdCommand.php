<?php
/**
 * @desc CurdCommand.php 描述信息
 * @author Tinywan(ShaoBo Wan)
 * @date 2022/03/18 16:07
 */

declare(strict_types=1);

namespace Tinywan\Curd\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TinyCurdCommand extends Command
{
    protected static $defaultName = 'tiny:curd';
    protected static $defaultDescription = 'tiny:curd';

    /**
     * @return void
     */
    protected function configure()
    {
        $this->addArgument('name', InputArgument::OPTIONAL, 'Name tiny:curd description');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $output->writeln('Hello tiny:curd ');
        return self::SUCCESS;
    }
}