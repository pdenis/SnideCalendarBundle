<?php


namespace Snide\Bundle\CalendarBundle\Model;


/**
 * Class Period
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class Period
{
    /**
     * Period start date
     *
     * @var \DateTime
     */
    protected $startedAt;

    /**
     * Period end date
     *
     * @var \DateTime
     */
    protected $endedAt;

    /**
     * An event
     *
     * @var Event
     */
    protected $event;

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
     * Get event
     *
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set event
     *
     * @param Event $event
     */
    public function setEvent(Event $event)
    {
        $this->event = $event;
    }

    /**
     * Check if period is active
     *
     * @return bool
     */
    public function isActive()
    {
        $now = new \DateTime();

        return ($this->startedAt <= $now && $now >= $this->endedAt);
    }
}
