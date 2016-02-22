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
        $versionMatrix = $this->get('version_matrix.matrix');
        $versionMatrix->load();

        $matrix = $versionMatrix->getData();

        return $this->render('AppBundle:Default:index.html.twig', ['matrix' => $matrix]);
    }

}
