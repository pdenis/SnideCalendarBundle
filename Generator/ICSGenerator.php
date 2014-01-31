<?php

namespace Snide\Bundle\CalendarBundle\Generator;

use Snide\Bundle\CalendarBundle\Manager\EventManagerInterface;
use Snide\Bundle\CalendarBundle\Transformer\EventToICSTransformer;

/**
 * Class ICSGenerator
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class ICSGenerator implements ICSGeneratorInterface
{
    /**
     * Event Manager
     *
     * @var EventManagerInterface
     */
    protected $eventManager;
    /**
     * Event to ICS transformer
     *
     * @var EventToICSTransformer
     */
    protected $eventTransformer;
    /**
     * Constructor
     *
     * @param EventManagerInterface $eventManager  Event Manager
     * @param EventToICSTransformer $eventTransformer
     */
    public function __construct(EventManagerInterface $eventManager, EventToICSTransformer $eventTransformer)
    {
        $this->eventManager = $eventManager;
        $this->eventTransformer = $eventTransformer;
    }

    /**
     * Generate ics content
     *
     * @return mixed
     */
    public function generate()
    {
        // TODO: Implement generate() method.
    }
}
