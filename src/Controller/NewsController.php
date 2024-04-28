<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    #[Route('api/news/{id}')]
    public function getNews(string $id=null): Response
    {
        //TODO - crie uma query real
        $news = [
            'id' => $id,
            'titulo' => 'Artista brasileira é premiada em Cannes',
            'categoria' => 'Cultura',
            'descricao' => 'A artista Eva Wilma ganha prêmio de melhor atriz em Cannes',
            'data' => '2019-02-20',
            'imagem' => 'https://exemplo.com.br/imagem/arte.jpg'
        ];
        return new JsonResponse($news);
    }
}