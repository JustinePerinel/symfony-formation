<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticlesController extends AbstractController
{
/** 
 * @Route("/articles/", name="articles_index")
 */
    public function index(ArticlesRepository $articlesRepo)
    {
        $articles = $articlesRepo->findBy(array(), array('id' => 'DESC'),5);
        
        return $this->render('articles/index.html.twig', [
            'posts'=>$articles,
        ]);

    }
} // fin class ArticlesController