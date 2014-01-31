<?php

namespace Snide\Bundle\CalendarBundle\Generator;

/**
 * Interface ICSGeneratorInterface
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
interface ICSGeneratorInterface
{
    /**
     * Generate ics content
     *
     * @return mixed
     */
    public function generate();
}
