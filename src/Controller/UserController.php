<?php

namespace App\Controller;


use App\Form\UserType;
use App\Service\UserService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends BaseController
{
    #[Route('/profile', name: 'appUser')]
    public function index(
        UserService $userService,
        Request $request
    ): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $userData = $form->getData();
            $this->entityManager->persist($userData);
            $this->entityManager->flush();
            $this->entityManager->clear();
        }

        return $this->render(
            '/security/profile.html.twig',
            [
                'controller' => 'user',
                'form' => $form
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
