<?php

namespace Pho\Plugins\Feeds\Listeners;

use Pho\Plugins\Feeds\Exceptions\UnknownEntityException;
use Pho\Lib\Graph\GraphInterface;
use Pho\Lib\Graph\EntityInterface;
use Pho\Lib\Graph\NodeInterface;
use Pho\Lib\Graph\EdgeInterface;
use Psr\Log\LoggerInterface;

class GraphListener
{
    public static function listen(GraphInterface $graph, LoggerInterface $logger): void
    {
        $members = $graph->members();
        foreach($members as $member) {
            self::_($member, $logger);
        }
    }

    /**
     * _
     * 
     * Listens Graph members, node, edge or anything.
     *
     * @param EntityInterface $member
     * 
     * @return void
     */
    protected static function _(EntityInterface $member, LoggerInterface $logger): void
    {
        if($member instanceof NodeInterface) 
        {
            NodeListener::listen($member);
            return;
        }
        elseif($member instanceof EdgeInterface)
        {
            EdgeListener::listen($member);
            return;
        }
        throw new UnknownEntityException($member);
    }
} 