<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 23/01/18
 * Time: 21:29
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Personal;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $personals = $em->getRepository(Personal::class)->findAll();
        return $this->render('default/about.html.twig', array(
            'personals' => $personals,
        ));
    }

}