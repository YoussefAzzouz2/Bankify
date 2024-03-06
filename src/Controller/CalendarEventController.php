<?php

namespace App\Controller;

use App\Entity\CalendarEvent;
use App\Form\CalendarEventType;
use App\Repository\CalendarEventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/calendar/event')]
class CalendarEventController extends AbstractController
{
    #[Route('/', name: 'app_calendar_event_index', methods: ['GET'])]
    public function index(CalendarEventRepository $calendarEventRepository): Response
    {
        return $this->render('calendar_event/index.html.twig', [
            'calendar_events' => $calendarEventRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_calendar_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $calendarEvent = new CalendarEvent();
        $form = $this->createForm(CalendarEventType::class, $calendarEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($calendarEvent);
            $entityManager->flush();

            return $this->redirectToRoute('app_calendar_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('calendar_event/new.html.twig', [
            'calendar_event' => $calendarEvent,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_calendar_event_show', methods: ['GET'])]
    public function show(CalendarEvent $calendarEvent): Response
    {
        return $this->render('calendar_event/show.html.twig', [
            'calendar_event' => $calendarEvent,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_calendar_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CalendarEvent $calendarEvent, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CalendarEventType::class, $calendarEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_calendar_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('calendar_event/edit.html.twig', [
            'calendar_event' => $calendarEvent,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_calendar_event_delete', methods: ['POST'])]
    public function delete(Request $request, CalendarEvent $calendarEvent, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calendarEvent->getId(), $request->request->get('_token'))) {
            $entityManager->remove($calendarEvent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_calendar_event_index', [], Response::HTTP_SEE_OTHER);
    }
}
