<?php

namespace Snide\Bundle\CalendarBundle\Loader;

use Snide\Bundle\CalendarBundle\Manager\EventManagerInterface;
use Snide\Bundle\CalendarBundle\Transformer\ICSToEventTransformer;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class ICSUploader
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class ICSULoader implements ICSLoaderInterface
{
    /**
     * List of events
     * @var array
     */
    protected $events;
    /**
     * Event manager
     *
     * @var \Snide\Bundle\CalendarBundle\Manager\EventManagerInterface
     */
    protected $eventManager;

    /**
     * ICS To Event transformer
     *
     * @var \Snide\Bundle\CalendarBundle\Transformer\ICSToEventTransformer
     */
    protected $icsTransformer;

    /**
     * Contructor
     *
     * @param EventManagerInterface $eventManager Event Manager
     * @param ICSToEventTransformer $icsTransformer ICS To Event transformer
     */
    public function __construct(EventManagerInterface $eventManager, ICSToEventTransformer $icsTransformer)
    {
        $this->eventManager = $eventManager;
        $this->icsTransformer = $icsTransformer;
    }

    /**
     * load File content
     *
     * @param File $file
     */
    public function load(File $file)
    {

    }

    /**
     * Get events
     *
     * @return array
     */
    public function getEvents()
    {
        if(empty($this->events)) {
            $this->events = array();
        }
        return $this->events;
    }

    protected function parse($icsContent)
    {

    }
}
