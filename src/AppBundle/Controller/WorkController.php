<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 23/01/18
 * Time: 21:53
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Experience;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WorkController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $experiences = $em->getRepository(Experience::class)->findAll();
        return $this->render('default/work.html.twig', array(
            'experiences' => $experiences,
        ));
    }

}