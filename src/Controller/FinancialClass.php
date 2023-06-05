<?php

namespace App\Controller;

use App\Service\FinancialService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FinancialClass extends BaseController
{
    #[Route('/financial', name: 'appFinancial')]
    public function index(
        FinancialService $financialService
    ): Response
    {
        return $this->render(
            '/financial/index.html.twig',
            [
                'controller' => 'financial'
            ]
        );
    }
}
