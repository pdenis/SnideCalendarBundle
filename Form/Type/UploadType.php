<?php

namespace Snide\Bundle\CalendarBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class UploadType
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class UploadType extends AbstractType
{
    /**
     * Build form
     *
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('file', 'file');
    }

    /**
     * Get form name
     * @return string Form name
     */
    public function getName()
    {
        return 'snide_calendar_upload_type';
    }
}