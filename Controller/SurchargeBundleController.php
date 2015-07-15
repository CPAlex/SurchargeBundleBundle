<?php

namespace CPAlex\SurchargeBundleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;

class SurchargeBundleController extends Controller
{
    /**
     * @EXT\Route("/index", name="cpalex_surchargebundle_index")
     * @EXT\Template
     *
     * @return Response
     */
    public function indexAction()
    {
        echo 'toto';
    }
}
