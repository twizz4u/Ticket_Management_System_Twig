<?php

namespace Tiwa\TicketManagementSystemTwig\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;



class HomeController {
    private $twig;
    private $features;
    public function __construct(Environment $twig) {
        $this->twig = $twig;
   //     Initialize features data
        $this->features = [
            [
                'id' => 1,
                "title" =>"Create Tickets",
                 "desc" => "Quickly log new issues or requests."
        
            ],
            [
                'id' => 2,
                "title" =>"Track Progress",
                "desc" => "Monitor ticket status and updates in real-time."
                
            ],
            [
                'id' => 3,
                "title"=> "Resolve Faster",
                "desc" => "Collaborate efficiently to close tickets."
                
            ],
            
         
        ];
    }

    public function index() {
        echo $this->twig->render('pages/AppHome.twig',  [
            'title' => 'Welcome Home',
             'app_name' => 'Ticket Management System',
             'features' => $this->features
         ]);
    }
}

// class HomeController
// {
//     private $twig;
//     private $features;

//     public function __construct()
//     {
//         // Load the Twig templates from /templates
//         $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../../templates');

//         // $loader = new FilesystemLoader(__DIR__ . '/../../templates');
//         $this->twig = new Environment($loader);

//         // Initialize features data
//         $this->features = [
//             [
//                 'id' => 1,
//                 'title' => 'Easy Ticket Creation',
//                 'desc' => 'Create and manage support tickets effortlessly with our intuitive interface',
//                 'icon' => '/images/ticket-icon.svg'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Real-time Updates',
//                 'desc' => 'Get instant notifications and updates on your ticket status',
//                 'icon' => '/images/updates-icon.svg'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Smart Assignment',
//                 'desc' => 'Automated ticket routing to the most qualified support agent',
//                 'icon' => '/images/assignment-icon.svg'
//             ],
            
         
//         ];
//     }

//     public function index()
//     {
//         // Render a Twig template with data
//         echo $this->twig->render('home.twig', [
//             'title' => 'Welcome Home',
//             'app_name' => 'Ticket Management System',
//             'features' => $this->features
//         ]);
//     }
// }
