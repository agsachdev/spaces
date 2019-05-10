<?php

namespace agsachdev\spaces\interfaces\commands;

/**
 * Interface ExecutableCommand
 *
 * @package agsachdev\spaces\interfaces\commands
 */
interface ExecutableCommand extends Command
{
    /**
     * @return mixed
     */
    public function execute();
}
