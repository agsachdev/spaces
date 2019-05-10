<?php

namespace agsachdev\spaces\handlers;

use agsachdev\spaces\base\handlers\Handler;
use agsachdev\spaces\commands\GetUrlCommand;

/**
 * Class GetUrlCommandHandler
 *
 * @package agsachdev\spaces\handlers
 */
final class GetUrlCommandHandler extends Handler
{
    /**
     * @param \agsachdev\spaces\commands\GetUrlCommand $command
     *
     * @return string
     */
    public function handle(GetUrlCommand $command): string
    {
        return $this->s3Client->getObjectUrl($command->getSpace(), $command->getFilename());
    }
}
