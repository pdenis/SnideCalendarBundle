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
    public function create(Event $event);

    /**
     * Delete an repo
     *
     * @param Event $event
     */
    public function delete(Event $event);

    /**
     * Update an repo
     *
     * @param Event $event
     */
    public function update(Event $event);

    /**
     * Create an repo instance
     *
     * @return Event
     */
    public function createNew();

    /**
     * Find an repo
     *
     * @param string $id repo ID
     * @return Event
     */
    public function find($id);

    /**
     * Find all repos
     *
     * @return array
     */
    public function findAll();
}
