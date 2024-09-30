<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    #[Route('/access-denied', name: 'access_denied_page')]
    public function accessDenied(): Response
    {
        return new Response('You do not have permission to access this page.');
    }
}