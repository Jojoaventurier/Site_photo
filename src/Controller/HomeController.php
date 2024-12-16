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
        // Current Exhibitions
        $currentExhibitions = [
            [
                'title' => '“La République (Cynique)”',
                'location' => 'Palais de Tokyo',
                'city' => 'Paris',
                'dates' => '13.11 / 01.12.24',
                'url' => 'https://palaisdetokyo.com/exposition/la-republique-cynique/',
                'image' => '/img/tokyo.png',
            ],
            [
                'title' => '“Dirty Rains”',
                'location' => 'CEAAC',
                'city' => 'Strasbourg',
                'dates' => '05.10.24 / 23.02.25',
                'url' => 'https://ceaac.org/fr/exposition/dirty-rains/',
                'image' => '/img/evenement-strasbourg_502833804.jpg',
            ],
            [
                'title' => 'Photo Saint Germain',
                'location' => 'Hôtel La Louisiane',
                'city' => 'Paris',
                'dates' => '11.07 / 11.10.2024',
                'url' => 'http://www.photosaintgermain.com/editions/2024/parcours/hotel-la-louisiane-roomservice',
                'image' => '/img/room_service.png',
            ],
        ];
    
        // Past Exhibitions
        $pastExhibitions = [
            [
                'title' => '“Echoes of Time”',
                'location' => 'MoMA',
                'city' => 'New York',
                'dates' => '15.03 / 10.06.23',
                'url' => 'https://moma.org/exhibition/echoes-of-time',
                'image' => '/img/moma_echoes.png',
            ],
            [
                'title' => '“Fleeting Shadows”',
                'location' => 'Tate Modern',
                'city' => 'London',
                'dates' => '01.09 / 30.11.23',
                'url' => 'https://tate.org.uk/exhibition/fleeting-shadows',
                'image' => '/img/tate_fleeting_shadows.png',
            ],
            [
                'title' => '“Past Horizons”',
                'location' => 'The Louvre',
                'city' => 'Paris',
                'dates' => '10.01 / 20.04.22',
                'url' => 'https://louvre.fr/exhibition/past-horizons',
                'image' => '/img/louvre_past_horizons.png',
            ],
            [
                'title' => '“Visions Beyond”',
                'location' => 'Getty Center',
                'city' => 'Los Angeles',
                'dates' => '12.05 / 15.08.22',
                'url' => 'https://getty.edu/exhibition/visions-beyond',
                'image' => '/img/getty_vision.png',
            ],
            [
                'title' => '“Whispers of Light”',
                'location' => 'Rijksmuseum',
                'city' => 'Amsterdam',
                'dates' => '20.09 / 05.12.22',
                'url' => 'https://rijksmuseum.nl/exhibition/whispers-of-light',
                'image' => '/img/rijksmuseum_whispers.png',
            ],
        ];
    
        return $this->render('home/exhibitions.html.twig', [
            'menuItems' => $this->getMenuItems(),
            'currentExhibitions' => $currentExhibitions,
            'pastExhibitions' => $pastExhibitions,
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
