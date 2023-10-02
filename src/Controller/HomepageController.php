<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * This function renders the homepage and the user.
     *
     * @return Response
     */
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
            'user' => $user
        ]);
    }
}
