<?php

namespace agsachdev\spaces;

use agsachdev\spaces\commands\DeleteCommand;
use agsachdev\spaces\commands\ExistCommand;
use agsachdev\spaces\commands\GetCommand;
use agsachdev\spaces\commands\GetPresignedUrlCommand;
use agsachdev\spaces\commands\GetUrlCommand;
use agsachdev\spaces\commands\PutCommand;
use agsachdev\spaces\commands\RestoreCommand;
use agsachdev\spaces\commands\UploadCommand;
use agsachdev\spaces\commands\ListCommand;
use agsachdev\spaces\interfaces;

/**
 * Class CommandFactory
 *
 * @package agsachdev\spaces
 */
class CommandFactory
{
    /** @var \agsachdev\spaces\interfaces\CommandBuilder */
    protected $builder;

    /**
     * CommandFactory constructor.
     *
     * @param \agsachdev\spaces\interfaces\CommandBuilder $builder
     */
    public function __construct(interfaces\CommandBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param string $filename
     *
     * @return \agsachdev\spaces\commands\GetCommand
     */
    public function get(string $filename): GetCommand
    {
        /** @var GetCommand $command */
        $command = $this->builder->build(GetCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $filename
     * @param mixed  $body
     *
     * @return \agsachdev\spaces\commands\PutCommand
     */
    public function put(string $filename, $body): PutCommand
    {
        /** @var PutCommand $command */
        $command = $this->builder->build(PutCommand::class);
        $command->withFilename($filename)->withBody($body);

        return $command;
    }

    /**
     * @param string $filename
     *
     * @return \agsachdev\spaces\commands\DeleteCommand
     */
    public function delete(string $filename): DeleteCommand
    {
        /** @var DeleteCommand $command */
        $command = $this->builder->build(DeleteCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $filename
     * @param mixed  $source
     *
     * @return \agsachdev\spaces\commands\UploadCommand
     */
    public function upload(string $filename, $source): UploadCommand
    {
        /** @var UploadCommand $command */
        $command = $this->builder->build(UploadCommand::class);
        $command->withFilename($filename)->withSource($source);

        return $command;
    }

    /**
     * @param string $filename
     * @param int    $days      lifetime of the active copy in days
     *
     * @return \agsachdev\spaces\commands\RestoreCommand
     */
    public function restore(string $filename, int $days): RestoreCommand
    {
        /** @var RestoreCommand $command */
        $command = $this->builder->build(RestoreCommand::class);
        $command->byFilename($filename)->withLifetime($days);

        return $command;
    }

    /**
     * @param string $filename
     *
     * @return \agsachdev\spaces\commands\ExistCommand
     */
    public function exist(string $filename): ExistCommand
    {
        /** @var ExistCommand $command */
        $command = $this->builder->build(ExistCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $prefix
     *
     * @return \agsachdev\spaces\commands\ListCommand
     */
    public function list(string $prefix): ListCommand
    {
        /** @var ListCommand $command */
        $command = $this->builder->build(ListCommand::class);
        $command->byPrefix($prefix);

        return $command;
    }

    /**
     * @param string $filename
     *
     * @return \agsachdev\spaces\commands\GetUrlCommand
     */
    public function getUrl(string $filename): GetUrlCommand
    {
        /** @var GetUrlCommand $command */
        $command = $this->builder->build(GetUrlCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $filename
     * @param mixed  $expires
     *
     * @return \agsachdev\spaces\commands\GetPresignedUrlCommand
     */
    public function getPresignedUrl(string $filename, $expires): GetPresignedUrlCommand
    {
        /** @var GetPresignedUrlCommand $command */
        $command = $this->builder->build(GetPresignedUrlCommand::class);
        $command->byFilename($filename)->withExpiration($expires);

        return $command;
    }
}
