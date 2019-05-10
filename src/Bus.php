<?php

namespace agsachdev\spaces;

use agsachdev\spaces\interfaces;

/**
 * Class Bus
 *
 * @package agsachdev\spaces
 */
class Bus implements interfaces\Bus
{
    /** @var interfaces\HandlerResolver */
    protected $resolver;

    /**
     * Bus constructor.
     *
     * @param \agsachdev\spaces\interfaces\HandlerResolver $inflector
     */
    public function __construct(interfaces\HandlerResolver $inflector)
    {
        $this->resolver = $inflector;
    }

    /**
     * @param \agsachdev\spaces\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(interfaces\commands\Command $command)
    {
        $handler = $this->resolver->resolve($command);

        return call_user_func([$handler, 'handle'], $command);
    }
}
