<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('pages/corporate-2025.html.twig');
    }

    #[Route('/corporate-2025', name: 'app_corporate_2025')]
    public function corporate2025(): Response
    {
        return $this->render('pages/corporate-2025.html.twig');
    }

    #[Route('/demo', name: 'app_demo')]
    public function demo(): Response
    {
        // Page de démonstration (à implémenter)
        return $this->render('pages/corporate-2025.html.twig');
    }

    #[Route('/solutions', name: 'app_solutions')]
    public function solutions(): Response
    {
        // Page des solutions (à implémenter)
        return $this->render('pages/corporate-2025.html.twig');
    }

    #[Route('/consultation', name: 'app_consultation')]
    public function consultation(): Response
    {
        // Page de demande de consultation (à implémenter)
        return $this->render('pages/corporate-2025.html.twig');
    }
}
