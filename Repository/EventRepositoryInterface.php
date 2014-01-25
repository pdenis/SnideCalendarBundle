<?php

namespace Snide\Bundle\CalendarBundle\Repository;

use Snide\Bundle\CalendarBundle\Model\Event;

/**
 * Interface EventEventInterface
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
interface EventRepositoryInterface
{
    /**
     * Retrieve all repositories
     *
     * @return array
     */
    public function findAll();

    /**
     * Find repo by ID
     *
     * @param $id Event id
     * @return Event|null
     */
    public function find($id);

    /**
     * Create an repo
     *
     * @param Event $event
     * @return mixed
     */
    public function create(Event $event);

    /**
     * Delete an repo
     *
     * @param Event $event
     * @return mixed
     */
    public function delete(Event $event);

    /**
     * Update an repo
     *
     * @param Event $event
     * @return mixed
     */
    public function update(Event $event);
}
