<?php

namespace App\Controller\api;

use App\Controller\BaseController;
use App\Service\UserService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiUserController extends BaseController
{
    #[Route('/api/create_user', 'apiCreateUser', methods: ['POST'])]
    public function createUser(
        Request $request,
        UserService $userService
    ): Response
    {
        $token = $request->headers->get('token');
        $salt = $request->headers->get('salt');
        $testToken = md5($salt . date('Y-m-d.h') . $salt);
        if ($token !== $testToken) {
            return $this->json(
                ['status' => 'Access denied'],
                403
            );
        }
        $createUser = $userService->createUser(
            $request->request->get('email'),
            $request->request->get('password'),
            ['ROLE_USER']
        );
        return $this->json([]);
    }
}
