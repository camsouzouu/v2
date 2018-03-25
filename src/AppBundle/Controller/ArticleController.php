<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;


class ArticleController extends Controller
{
    /**
     * @Route("/", name="article_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('AppBundle:Article')->findAll();
        return $this->render('Article/index.html.twig',array(
        'articles' => $articles,
    ));

    }

    /**

     * @Route("show/{id}", name="article_show")
     * @Method("GET")
     */
    public function showAction(Article $article)
    {


            return $this->render('Article/show.html.twig', array(
                'article' => $article
            ));

    }

}