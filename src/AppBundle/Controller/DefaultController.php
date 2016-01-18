<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @author Ivo Bathke <ivo.bathke@gmail.com>
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        /*
         * load config
         * render projects
         */
        return $this->render('AppBundle:Default:index.html.twig');
    }

    /**
     * @Route("/{project}")
     */
    public function matrixAction()
    {
        /*
         * load project
         * 404 if not in Config
         * render matrix
         *
         */
    }
}
