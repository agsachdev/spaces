<?php

namespace agsachdev\spaces\interfaces\commands;

/**
 * Interface HasSpace
 *
 * @package agsachdev\spaces\interfaces\commands
 */
interface HasSpace
{
    /**
     * @param string $name
     */
    public function inSpace(string $name);
}
