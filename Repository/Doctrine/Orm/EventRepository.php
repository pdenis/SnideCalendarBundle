<?php

namespace Snide\Bundle\CalendarBundle\Event\Doctrine\Orm;

use Doctrine\ORM\EntityRepository;
use Snide\Bundle\CalendarBundle\Model\Event;
use Snide\Bundle\CalendarBundle\Event\EventRepositoryInterface;

/**
 * Class EventEvent
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class EventEvent extends EntityRepository implements EventRepositoryInterface
{

    /**
     * Retrieve all repositories
     *
     * @return array
     */
    public function findAll()
    {
        return $this->findBy(array());
    }

    /**
     * Find repo by ID
     *
     * @param string $id Event id
     * @return Event|null
     */
    public function find($id)
    {
        return parent::find($id);
    }

    /**
     * Create an repo
     *
     * @param Event $event
     * @return mixed
     */
    public function create(Event $event)
    {
        $this->_em->persist($event);
        $this->_em->flush();

        return $event;
    }

    /**
     * Delete an repo
     *
     * @param Event $event
     * @return mixed
     */
    public function delete(Event $event)
    {
        $this->_em->remove($event);
        $this->_em->flush();
    }

    /**
     * Update an repo
     *
     * @param Event $event
     * @return mixed
     */
    public function update(Event $event)
    {
        $event = $this->_em->merge($event);
        $this->_em->persist($event);
        $this->_em->flush($event);

        return $event;
    }
}
