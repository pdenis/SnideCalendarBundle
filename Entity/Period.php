<?php


namespace Snide\Bundle\CalendarBundle\Entity;

use Snide\Bundle\CalendarBundle\Model\Period as BasePeriod;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Period
 *
 * @ORM\Entity
 * @ORM\Table(name="period")
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class Period extends BasePeriod
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
     * Period start date
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $startedAt;
    /**
     * Period end date
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $endedAt;
    /**
     * Event
     *
     * @var Event
     *
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="periods", cascade={"all"})
     */
    protected $event;
}