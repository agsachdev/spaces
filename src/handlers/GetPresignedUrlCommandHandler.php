<?php

namespace agsachdev\spaces\handlers;

use agsachdev\spaces\base\handlers\Handler;
use agsachdev\spaces\commands\GetPresignedUrlCommand;

/**
 * Class GetPresignedUrlCommandHandler
 *
 * @package agsachdev\spaces\handlers
 */
final class GetPresignedUrlCommandHandler extends Handler
{
    /**
     * @param \agsachdev\spaces\commands\GetPresignedUrlCommand $command
     *
     * @return string
     */
    public function handle(GetPresignedUrlCommand $command): string
    {
        $awsCommand = $this->s3Client->getCommand('GetObject', $command->getArgs());
        $request = $this->s3Client->createPresignedRequest($awsCommand, $command->getExpiration());

        return (string)$request->getUri();
    }
}
