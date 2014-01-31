<?php


namespace Snide\Bundle\CalendarBundle\Controller;

use Snide\Bundle\CalendarBundle\Manager\EventManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class EventController
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class EventController extends Controller
{
    public function indexAction()
    {

    }

    public function newAction()
    {

    }

    public function editAction($id)
    {

    }

    public function createAction()
    {

    }

    public function updateAction()
    {

    }

    public function deleteAction()
    {

    }

    public function downloadAction()
    {

    }

    /**
     * @Template
     *
     * @param Request $request
     * @return array
     */
    public function uploadAction(Request $request)
    {
        $form = $this->createForm(
            $this->container->get('snide_travinizer.form.repo_type')
        );
        if($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                try {
                    $this->get('snide_calendar.ics_uploader')->upload($form->getData());
                }catch(\Exception $e) {

                }
            }
        }

        return array(
            'form' => $form->createView(),
            'errors' => $form->getErrors()
        );
    }

    /**
     * Get Event Manager
     *
     * @return EventManagerInterface
     */
    protected function getEventManager()
    {
        return $this->get('snide_calendar.event_manager');
    }
}
