<?php

namespace App\Controller;
use App\Repository\MotsClesRepository;
use App\Repository\ArticleRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepository,MotsClesRepository $motsClesRepository): Response
    {
        
    $motsCles = $motsClesRepository->findAll();
    $articles = $articleRepository->findAll();
    return $this->render('home/index.html.twig', [
        'articles' => $articles,
        'mots_cles' => $motsCles,
            'controller_name' => 'HomeController',
        ]);
    }
}
