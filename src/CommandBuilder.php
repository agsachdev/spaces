<?php

namespace agsachdev\spaces;

use agsachdev\spaces\interfaces;

/**
 * Class CommandBuilder
 *
 * @package agsachdev\spaces
 */
class CommandBuilder implements interfaces\CommandBuilder
{
    /** @var string default space name */
    protected $space;

    /** @var string default acl */
    protected $acl;

    /** @var interfaces\Bus */
    protected $bus;

    /**
     * CommandBuilder constructor.
     *
     * @param \agsachdev\spaces\interfaces\Bus $bus
     * @param string                                 $space
     * @param string                                 $acl
     */
    public function __construct(interfaces\Bus $bus, string $space = '', string $acl = '')
    {
        $this->bus = $bus;
        $this->space = $space;
        $this->acl = $acl;
    }

    /**
     * @param string $className
     *
     * @return \agsachdev\spaces\interfaces\commands\Command
     * @throws \yii\base\InvalidConfigException
     */
    public function build(string $className): interfaces\commands\Command
    {
        $params = is_subclass_of($className, interfaces\commands\ExecutableCommand::class) ? [$this->bus] : [];

        /** @var interfaces\commands\Command $command */
        $command = \Yii::createObject($className, $params);

        $this->prepareCommand($command);

        return $command;
    }

    /**
     * @param \agsachdev\spaces\interfaces\commands\Command $command
     */
    protected function prepareCommand(interfaces\commands\Command $command)
    {
        if ($command instanceof interfaces\commands\HasSpace) {
            $command->inSpace($this->space);
        }

        if ($command instanceof interfaces\commands\HasAcl) {
            $command->withAcl($this->acl);
        }
    }
}
