<?php

namespace agsachdev\spaces\interfaces;

use agsachdev\spaces\interfaces\commands\Command;

/**
 * Interface Bus
 *
 * @package agsachdev\spaces\interfaces
 */
interface Bus
{
    /**
     * @param \agsachdev\spaces\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);
}
