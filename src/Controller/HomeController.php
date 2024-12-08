<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'menuItems' => $this->getMenuItems(),
        ]);
    }

    #[Route('/photographs', name: 'photographs')]
    public function photographs(): Response
    {
        return $this->render('home/photographs.html.twig', [
            'menuItems' => $this->getMenuItems(),
        ]);
    }

    #[Route('/fashion', name: 'fashion')]
    public function fashion(): Response
    {
        return $this->render('home/fashion.html.twig', [
            'menuItems' => $this->getMenuItems(),
        ]);
    }

    #[Route('/exhibitions', name: 'exhibitions')]
    public function exhibitions(): Response
    {
        $exhibitions = [
            [
                'title' => '“La République (Cynique)”',
                'location' => 'Palais de Tokyo',
                'city' => 'Paris',
                'dates' => '13.11 / 01.12.24',
            ],
            [
                'title' => '“Dirty Rains”',
                'location' => 'CEAAC',
                'city' => 'Strasbourg',
                'dates' => '05.10.24 / 23.02.25',
            ],
            [
                'title' => 'Photo Saint Germain',
                'location' => 'Hôtel La Louisiane',
                'city' => 'Paris',
                'dates' => '11.07 / 11.10.2024',
            ],
        ];
    
        return $this->render('home/exhibitions.html.twig', [
            'menuItems' => $this->getMenuItems(),
            'exhibitions' => $exhibitions,
        ]);
    }

    #[Route('/articles-books', name: 'articles_books')]
    public function articlesBooks(): Response
    {
        return $this->render('home/articles_books.html.twig', [
            'menuItems' => $this->getMenuItems(),
        ]);
    }

    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('home/cv.html.twig', [
            'menuItems' => $this->getMenuItems(),
        ]);
    }

    #[Route('/contact-info', name: 'contact_info')]
    public function contactInfo(): Response
    {
        return $this->render('home/contact_info.html.twig', [
            'menuItems' => $this->getMenuItems(),
        ]);
    }

    private function getMenuItems(): array
    {
        return [
            ['route' => 'home', 'label' => 'Home'],
            ['route' => 'photographs', 'label' => 'Photographs'],
            ['route' => 'fashion', 'label' => 'Fashion'],
            ['route' => 'exhibitions', 'label' => 'Exhibitions'],
            ['route' => 'articles_books', 'label' => 'Articles and books'],
            ['route' => 'cv', 'label' => 'CV'],
            ['route' => 'contact_info', 'label' => 'Contact info'],
        ];
    }
}
