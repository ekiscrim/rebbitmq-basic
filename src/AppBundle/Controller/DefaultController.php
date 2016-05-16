<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/produce", name="produce")
     */
    public function produce()
    {
        $msg = array('taskid' => rand());
        $this->get('old_sound_rabbit_mq.task_name_producer')->publish(serialize($msg));

        echo "Just produced task with number: ". $msg['taskid'];
        die;
    }
}
