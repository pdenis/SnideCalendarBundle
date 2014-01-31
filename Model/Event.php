<?php

namespace Snide\Bundle\CalendarBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

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

    /**
     * Add a period to the list
     *
     * @param Period $period
     */
    public function addPeriod(Period $period)
    {
        $period->setEvent($this);
        $this->getPeriods()->add($period);
    }

    /**
     * Get periods
     *
     * @return ArrayCollection
     */
    public function getPeriods()
    {
        if(!$this->periods) {
            $this->periods = new ArrayCollection();
        }

        return $this->periods;
    }

    /**
     * Remove a period from the list
     *
     * @param Period $period
     */
    public function removePeriod(Period $period)
    {
        if($this->getPeriods()->contains($period)) {
            $this->getPeriods()->remove($period);
        }
    }

    /**
     * Set periods
     *
     * @param ArrayCollection $periods
     */
    public function setPeriods(ArrayCollection $periods)
    {
        $this->periods = $periods;
    }

    /**
     * Check if event is active
     */
    public function isActive()
    {
        foreach($this->getPeriods() as $period)
        {
            if($period->isActive())
            {
                return true;
            }
        }

        return false;
    }
}
