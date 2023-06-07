<?php

namespace App\Controller;


use App\Service\UserService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends BaseController
{
    #[Route('/profile', name: 'appUser')]
    public function index(
        UserService $userService
    ): Response
    {
        return $this->render(
            '/security/profile.html.twig',
            [
                'controller' => 'user'
            ]
        );
    }


    #[Route('/replace_first_password', name: 'appUserReplaceFirstPassword')]
    public function replaceFirstPassword(
        UserService $userService
    )
    {
        return $this->render(
            '/security/replace_password.html.twig',
            [
                'controller' => 'user'
            ]
        );
    }
}
