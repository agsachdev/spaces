<?php

namespace agsachdev\spaces\interfaces;

use agsachdev\spaces\interfaces\commands\Command;

/**
 * Interface Service
 *
 * @package agsachdev\spaces\interfaces
 */
interface Service
{
    /**
     * @param \agsachdev\spaces\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);

    /**
     * @param string $commandClass
     *
     * @return \agsachdev\spaces\interfaces\commands\Command
     */
    public function create(string $commandClass): Command;
}
