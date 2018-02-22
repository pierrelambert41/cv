<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 22/02/18
 * Time: 23:04
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Portfolio;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class PortfolioController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $portfolios = $em->getRepository(Portfolio::class)->findAll();

        return $this->render('default/portfolio.html.twig', [
            'portfolios' => $portfolios,
        ]);
    }


}