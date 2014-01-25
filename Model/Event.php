<?php

namespace Snide\Bundle\CalendarBundle\Model;

/**
 * Class Event
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
abstract class Event
{
    /**
     * Event title
     *
     * @var string
     */
    protected $title;

    /**
     * Event start date
     *
     * @var \DateTime
     */
    protected $startedAt;

    /**
     * Event end date
     *
     * @var \DateTime
     */
    protected $endedAt;

    /**
     * Event description
     *
     * @var string
     */
    protected $description;

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \DateTime $endedAt
     */
    public function setEndedAt($endedAt)
    {
        $this->endedAt = $endedAt;
    }

    /**
     * @return \DateTime
     */
    public function getEndedAt()
    {
        return $this->endedAt;
    }

    /**
     * @param \DateTime $startedAt
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;
    }

    /**
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }



}