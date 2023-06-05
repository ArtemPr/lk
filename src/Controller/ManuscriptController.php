<?php

namespace App\Controller;

use App\Service\ManuscriptService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManuscriptController extends BaseController
{
    #[Route('/manuscript', name: 'appManuscript')]
    public function index(
        ManuscriptService $manuscriptService
    ): Response
    {
        return $this->render(
            '/manuscript/index.html.twig',
            [
                'controller' => 'manuscript'
            ]
        );
    }
}
