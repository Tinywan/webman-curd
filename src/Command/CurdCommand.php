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

class CurdCommand extends Command
{
    protected static $defaultName = 'curd';
    protected static $defaultDescription = 'curd';

    /**
     * @return void
     */
    protected function configure()
    {
        $this->addArgument('name', InputArgument::OPTIONAL, 'Name description');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $output->writeln('Hello curd');
        return self::SUCCESS;
    }
}