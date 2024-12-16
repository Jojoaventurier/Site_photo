<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MessageController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(
        Request $request, 
        EntityManagerInterface $em, 
        MailerInterface $mailer
    ): Response {
        $contact = new Message();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($contact);
            $em->flush();

            // Send email
            $email = (new Email())
                ->from($contact->getEmail())
                ->to('marianne.maric@example.com')
                ->subject('New Contact Form Message')
                ->text("From: {$contact->getName()}\n\n{$contact->getMessage()}");

            $mailer->send($email);

            $this->addFlash('success', 'Your message has been sent successfully!');
            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}