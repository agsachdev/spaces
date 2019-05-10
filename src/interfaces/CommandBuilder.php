<?php

namespace agsachdev\spaces\interfaces;

use agsachdev\spaces\interfaces\commands\Command;

/**
 * Interface CommandBuilder
 *
 * @package agsachdev\spaces\interfaces
 */
interface CommandBuilder
{
    /**
     * @param string $commandClass
     *
     * @return \agsachdev\spaces\interfaces\commands\Command
     */
    public function build(string $commandClass): Command;
}
