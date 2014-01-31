<?php

namespace Snide\Bundle\CalendarBundle\Manager;

use Snide\Bundle\CalendarBundle\Model\Event;

/**
 * Class EventManagerInterface
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
interface EventManagerInterface
{
    /**
     * Create and save an repo
     *
     * @param Event $event
     */
    public function createEvent(Event $event);

    /**
     * Delete an repo
     *
     * @param Event $event
     */
    public function deleteEvent(Event $event);

    /**
     * Update an repo
     *
     * @param Event $event
     */
    public function updateEvent(Event $event);

    /**
     * Create an repo instance
     *
     * @return Event
     */
    public function createNewEvent();

    /**
     * Find an repo
     *
     * @param string $id repo ID
     * @return Event
     */
    public function findEvent($id);

    /**
     * Find all repos
     *
     * @return array
     */
    public function findEvents();

    /**
     * Find events between two dates
     *
     * @param \DateTime $start
     * @param \DateTime $end
     * @return mixed
     */
    public function findEventsBetween(\DateTime $start, \DateTime $end);
}
