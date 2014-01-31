<?php

namespace Snide\Bundle\CalendarBundle\Loader;

use Symfony\Component\HttpFoundation\File\File;

/**
 * Interface ICSUploaderInterface
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
interface ICSLoaderInterface
{

    /**
     * Upload File content
     *
     * @param File $file
     */
    public function load(File $file);

    /**
     * Get events from ICS file
     *
     * @return array
     */
    public function getEvents();
}
