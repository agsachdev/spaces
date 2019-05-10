<?php

namespace agsachdev\spaces\base\commands;

use agsachdev\spaces\interfaces\Bus;
use agsachdev\spaces\interfaces\commands\ExecutableCommand as ExecutableCommandInterface;

/**
 * Class ExecutableCommand
 *
 * @package agsachdev\spaces\base\commands
 */
abstract class ExecutableCommand implements ExecutableCommandInterface
{
    /** @var \agsachdev\spaces\interfaces\Bus */
    private $bus;

    /**
     * ExecutableCommand constructor.
     *
     * @param \agsachdev\spaces\interfaces\Bus $bus
     */
    public function __construct(Bus $bus)
    {
        $this->bus = $bus;
    }

    /**
     * @return mixed
     */
    public function execute()
    {
        return $this->bus->execute($this);
    }
}
