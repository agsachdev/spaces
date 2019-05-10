<?php

namespace agsachdev\spaces\interfaces;

use agsachdev\spaces\interfaces\commands\Command;
use agsachdev\spaces\interfaces\handlers\Handler;

/**
 * Interface HandlerResolver
 *
 * @package agsachdev\spaces\interfaces
 */
interface HandlerResolver
{
    /**
     * @param \agsachdev\spaces\interfaces\commands\Command $command
     *
     * @return \agsachdev\spaces\interfaces\handlers\Handler
     */
    public function resolve(Command $command): Handler;

    /**
     * @param string $commandClass
     * @param mixed  $handler
     */
    public function bindHandler(string $commandClass, $handler);
}
