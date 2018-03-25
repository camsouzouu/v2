<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;


class ContactController extends Controller
{
    /**
     * @Route("/", name="contact_index")
     */
    public function indexAction(Request $request)
    {

        return $this->render('Contact/index.html.twig');

    }



}