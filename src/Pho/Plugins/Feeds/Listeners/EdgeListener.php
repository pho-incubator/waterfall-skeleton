<?php

namespace Pho\Plugins\Feeds\Listeners;

use Pho\Plugins\Feeds\Exceptions\UnknownEntityException;
use Pho\Lib\Graph\EdgeInterface;
use Pho\Framework\ActorOut\Read;
use Pho\Framework\ActorOut\Subscribe;
use Pho\Framework\ActorOut\Write;
use Pho\Framework\ObjectOut\Mention;
use Psr\Log\LoggerInterface;

class EdgeListener
{
    public static function listen(EdgeInterface $edge, LoggerInterface $logger): void
    {
        if($edge instanceof Read) {
            
        }
        elseif($edge instanceof Write) {

        }
        elseif($edge instanceof Subscribe) {

        }
        elseif($edge instanceof Mention) {

        }
        throw new UnknownEntityException($edge);
    }
}
