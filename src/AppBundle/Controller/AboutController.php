<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 23/01/18
 * Time: 21:29
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Experience;
use AppBundle\Entity\Personal;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $personals = $em->getRepository(Personal::class)->findAll();
        $experiences = $em->getRepository(Experience::class)->findAll();
        return $this->render('default/work.html.twig', [
            'personals' => $personals,
            'experiences' => $experiences
        ]);
    }

}