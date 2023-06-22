<?php

namespace App\Controller;

use App\Entity\MotsCles;
use App\Form\MotsCles1Type;
use App\Repository\MotsClesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/category')]
class MotsClesController extends AbstractController
{
    #[Route('/', name: 'app_mots_cles_index', methods: ['GET'])]
    public function index(MotsClesRepository $motsClesRepository): Response
    {
        return $this->render('mots_cles/index.html.twig', [
            'mots_cles' => $motsClesRepository->findAll(),
        ]);
    }

    

    #[Route('/{id}', name: 'app_mots_cles_show', methods: ['GET'])]
    public function show(MotsCles $motsCle): Response
    {
        $articles = $motsCle->getArticles();
        return $this->render('mots_cles/show.html.twig', [
            'mots_cle' => $motsCle,
            'articles' => $articles
        ]);
    }
}