<?php

namespace Snide\Bundle\CalendarBundle\Manager;

use Snide\Bundle\CalendarBundle\Model\Event;
use Snide\Bundle\CalendarBundle\Repository\EventRepositoryInterface;

/**
 * Class EventManager
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class EventManager implements EventManagerInterface
{
    /**
     * Event repository
     *
     * @var \Snide\Bundle\CalendarBundle\Repository\EventRepositoryInterface
     */
    protected $repository;

    /**
     * Event class
     *
     * @var string
     */
    protected $class;

    public function __construct(EventRepositoryInterface $eventRepository, $class)
    {
        $this->repository = $eventRepository;
        $this->class = $class;
    }

    /**
     * Create and save an repo
     *
     * @param Event $event
     */
    public function create(Event $event)
    {
        $this->repository->create($event);
    }

    /**
     * Delete an repo
     *
     * @param Event $event
     */
    public function delete(Event $event)
    {
        $this->repository->delete($event);
    }

    /**
     * Update an repo
     *
     * @param Event $event
     */
    public function update(Event $event)
    {
        $this->repository->update($event);
    }

    /**
     * Create an repo instance
     *
     * @return Event
     */
    public function createNew()
    {
        $class = $this->class;

        return new $class();
    }

    /**
     * Find an repo
     *
     * @param string $id repo ID
     * @return Event
     */
    public function find($id)
    {
        return $this->repository->find($id);
    }

    /**
     * Find all repos
     *
     * @return array
     */
    public function findAll()
    {
        return $this->repository->findAll();
    }
}
