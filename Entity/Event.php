<?php

namespace Snide\Bundle\CalendarBundle\Entity;

use Snide\Bundle\CalendarBundle\Model\Event as BaseEvent;

/**
 * Class Event
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
     * Event start date
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $startedAt;
    /**
     * Event end date
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $endedAt;
}
