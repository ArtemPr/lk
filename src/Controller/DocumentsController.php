<?php

namespace App\Controller;

use App\Service\DocumentsService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DocumentsController extends BaseController
{
    #[Route('/documents', name: 'appDocuments')]
    public function index(
        DocumentsService $documentsService
    ): Response
    {
        return $this->render(
            '/documents/index.html.twig',
            [
                'controller' => 'documents'
            ]
        );
    }
}
