<?php

namespace Snide\Bundle\CalendarBundle\Entity;

use Snide\Bundle\CalendarBundle\Model\Event as BaseEvent;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Event
 *
 * @ORM\Entity
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="Snide\Bundle\CalendarBundle\Repository\Doctrine\Orm\EventRepository")
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class Event extends BaseEvent
{
    /**
     * Event ID
     *
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * Event title
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $title;
    /**
     * Event Description
     *
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $description;
    /**
     * List of periods
     *
     * @var array
     *
     * @ORM\OneToMany(targetEntity="Period", mappedBy="event", cascade={"all"})
     */
    protected $periods;
}
