<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $categorias = [
            ['title' => 'Mundo', 'text' => 'Notícias sobre o Mundo'],
            ['title' => 'Brasil', 'text' => 'Notícias sobre o Brasil'],
            ['title' => 'Tecnologia', 'text' => 'Notícias sobre tecnologia'],
            ['title' => 'Design', 'text' => 'Notícias sobre design'],
            ['title' => 'Cultura', 'text' => 'Notícias sobre o cultura'],
            ['title' => 'Negócios', 'text' => 'Notícias sobre negócios'],
            ['title' => 'Política', 'text' => 'Notícias sobre política'],
            ['title' => 'Opinião', 'text' => 'Notícias sobre opinião'],
            ['title' => 'Ciência', 'text' => 'Notícias sobre ciência'],
            ['title' => 'Saúde', 'text' => 'Notícias sobre saúde'],
            ['title' => 'Estilo', 'text' => 'Notícias sobre estilo'],
            ['title' => 'Viagem', 'text' => 'Notícias sobre viagem']
        ];
        $pageTitle = "Sistema de Notícias";
        return $this->render('home.html.twig',
            ['categorias' => $categorias,
                'pageTitle' => $pageTitle
        ]);
    }
    #[Route('/categoria{slug}', name: 'app_categoria')]
    public function categoria(string $slug=null): Response
    {
        $categorias = [
            ['title' => 'Mundo', 'text' => 'Notícias sobre o Mundo'],
            ['title' => 'Brasil', 'text' => 'Notícias sobre o Brasil'],
            ['title' => 'Tecnologia', 'text' => 'Notícias sobre tecnologia'],
            ['title' => 'Design', 'text' => 'Notícias sobre design'],
            ['title' => 'Cultura', 'text' => 'Notícias sobre o cultura'],
            ['title' => 'Negócios', 'text' => 'Notícias sobre negócios'],
            ['title' => 'Política', 'text' => 'Notícias sobre política'],
            ['title' => 'Opinião', 'text' => 'Notícias sobre opinião'],
            ['title' => 'Ciência', 'text' => 'Notícias sobre ciência'],
            ['title' => 'Saúde', 'text' => 'Notícias sobre saúde'],
            ['title' => 'Estilo', 'text' => 'Notícias sobre estilo'],
            ['title' => 'Viagem', 'text' => 'Notícias sobre viagem']
        ];
        $pageTitle = $slug;
        return $this->render('categoria.html.twig',
            ['categorias' => $categorias,
                'pageTitle' => $pageTitle
            ]);
    }

}