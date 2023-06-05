<?php

namespace App\Controller;

use App\Service\MainService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends BaseController
{
    #[Route('/', name: 'appIndex')]
    public function index(
        MainService $mainService
    ): Response
    {
        return $this->render(
            '/main/index.html.twig',
            [
                'controller' => 'main'
            ]
        );
    }
}
