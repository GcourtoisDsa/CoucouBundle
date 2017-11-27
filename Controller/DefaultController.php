<?php

namespace Dsatec\CoucouBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/dsa")
     */
    public function indexAction()
    {
        return $this->render('DsatecCoucouBundle:Default:index.html.twig');
    }
}
