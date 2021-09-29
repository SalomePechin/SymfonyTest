<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurController extends AbstractController
{
    #[Route('/utilisateur', name: 'utilisateur')]
    public function index($id): Response
    {
        $nom = 'Sam P.';
        return $this->render('utilisateur/index.html.twig', [
            'controller_id' => $id,
            'controller_name' => $nom
        ]);
    }
}
