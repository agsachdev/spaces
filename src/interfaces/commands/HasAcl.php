<?php

namespace agsachdev\spaces\interfaces\commands;

/**
 * Interface HasAcl
 *
 * @package agsachdev\spaces\interfaces\commands
 */
interface HasAcl
{
    /**
     * @param string $acl
     */
    public function withAcl(string $acl);
}
