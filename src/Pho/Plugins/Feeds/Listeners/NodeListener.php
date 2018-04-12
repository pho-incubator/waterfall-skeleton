<?php

namespace Pho\Plugins\Feeds\Listeners;

use Pho\Plugins\Feeds\Exceptions\UnknownEntityException;
use Pho\Lib\Graph\NodeInterface;
use Pho\Framework\Actor;
use Pho\Framework\Graph;
use Pho\Framework\Object;
use Psr\Log\LoggerInterface;

class NodeListener
{
    public static function listen(NodeInterface $node, LoggerInterface $logger): void
    {
        if($node instanceof Actor) {
            
        }
        elseif($node instanceof Object) {

        }
        elseif($node instanceof Graph) {

        }
        throw new UnknownEntityException($node);
    }
}
