<?php

namespace App\Controller;

use App\Entity\Vehicles;
use App\Form\VehiclesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('page/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    public function formulaire(Request $request): Response
    {
        $form = $this->createForm(Vehicles::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Faites quelque chose avec les données
            // ...

            return $this->redirectToRoute('app_home');
        }

        return $this->render('page/home.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
