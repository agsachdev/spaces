<?php

namespace agsachdev\spaces\interfaces\commands;

/**
 * Interface PlainCommand
 *
 * @package agsachdev\spaces\interfaces\commands
 */
interface PlainCommand extends Command
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return array
     */
    public function toArgs(): array;
}
