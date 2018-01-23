<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Personal;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $personals = $em->getRepository(Personal::class)->findAll();
        return $this->render('default/index.html.twig', array(
            'personals' => $personals,
        ));
    }
}
