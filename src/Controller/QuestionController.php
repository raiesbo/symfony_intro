<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('Hello Symfony');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug): Response
    {
        $answers = [
            'Make sure you cat is sitting',
            'Honestly...',
            'Maybe!'
        ];
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);
    }
}