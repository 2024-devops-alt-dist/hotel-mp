<?php

namespace App\Controller;

use App\Entity\Suite;
use App\Form\SuiteType;
use App\Repository\HotelRepository;
use App\Repository\SuiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/suite')]
final class SuiteController extends AbstractController
{
    #[Route(name: 'app_suite_index', methods: ['GET'])]
    public function index(SuiteRepository $suiteRepository): Response
    {
        return $this->render('suite/index.html.twig', [
            'suites' => $suiteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_suite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $suite = new Suite();
        $form = $this->createForm(SuiteType::class, $suite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($suite);
            $entityManager->flush();

            return $this->redirectToRoute('app_suite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('suite/new.html.twig', [
            'suite' => $suite,
            'form' => $form,
        ]);
    }

    #[Route('/suite/{id}', name: 'app_suite_show', methods: ['GET'])]
    public function show(Suite $suite, HotelRepository $hotelRepository): Response
    {
        // Fetch the associated hotel
        $hotel = $suite->getHotel(); // Assuming getHotel() returns the associated hotel object

        return $this->render('suite/show.html.twig', [
            'suite' => $suite,
            'hotel' => $hotel, // Pass the hotel to the template
        ]);
    }


    #[Route('/{id}/edit', name: 'app_suite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Suite $suite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SuiteType::class, $suite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_suite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('suite/edit.html.twig', [
            'suite' => $suite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_suite_delete', methods: ['POST'])]
    public function delete(Request $request, Suite $suite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$suite->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($suite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_suite_index', [], Response::HTTP_SEE_OTHER);
    }
}
