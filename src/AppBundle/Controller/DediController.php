<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Dedi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Dedi controller.
 *
 */
class DediController extends Controller
{


    /**
     * Creates a new dedi entity.
     *
     * @Route("/new", name="dedicace_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $dedi = new Dedi();
        $form = $this->createForm('AppBundle\Form\DediType', $dedi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dedi);
            $em->flush();

            return $this->redirectToRoute('article_index');
        }

        return $this->render('dedi/new.html.twig', array(
            'dedi' => $dedi,
            'form' => $form->createView(),
        ));
    }


}
