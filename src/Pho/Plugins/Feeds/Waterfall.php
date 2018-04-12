<?php

namespace Pho\Plugins\Feeds;

use Pho\Kernel\Kernel;
use Pho\Plugins\Feeds\Listeners\GraphListener;

/**
 * Feeds Plugin Waterfall
 * 
 */
class Waterfall 
{
    /**
     * Listen
     * 
     * The Starting point of the Feeds Plugin
     * listener waterfall.
     * 
     * It starts here, 
     * * expands to GraphListener.
     * * which then expands to NodeListener and EdgeListener in the second step.
     *
     * @param Kernel $kernel
     * @return void
     */
    public static function listen(Kernel $kernel): void
    {
        // check if the kernel is running
        $graph = $kernel->graph();
        $logger = $kernel->logger();
        GraphListener::listen($graph, $logger);
    }

}