<?php

namespace agsachdev\spaces\interfaces\commands;

/**
 * Interface Asynchronous
 *
 * @package agsachdev\spaces\interfaces\commands
 */
interface Asynchronous
{
    /**
     * @return mixed
     */
    public function async();

    /**
     * @return bool
     */
    public function isAsync(): bool;
}
