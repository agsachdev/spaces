<?php

namespace agsachdev\spaces\handlers;

use agsachdev\spaces\base\handlers\Handler;
use agsachdev\spaces\commands\ExistCommand;

/**
 * Class ExistCommandHandler
 *
 * @package agsachdev\spaces\handlers
 */
final class ExistCommandHandler extends Handler
{
    /**
     * @param \agsachdev\spaces\commands\ExistCommand $command
     *
     * @return bool
     */
    public function handle(ExistCommand $command): bool
    {
        return $this->s3Client->doesObjectExist(
            $command->getSpace(),
            $command->getFilename(),
            $command->getOptions()
        );
    }
}
