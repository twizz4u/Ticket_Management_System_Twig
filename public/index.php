<?php
require __DIR__ . '/../vendor/autoload.php';

use Tiwa\TicketManagementSystemTwig\Controllers\HomeController;
use Tiwa\TicketManagementSystemTwig\Controllers\DashboardController;
use Tiwa\TicketManagementSystemTwig\Controllers\SigninController;
use Tiwa\TicketManagementSystemTwig\Controllers\SignupController;


use Bramus\Router\Router;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;




$router = new Router();

// Setup Twig
$loader = new FilesystemLoader(__DIR__ . '/../templates');
$twig = new Environment($loader);





// Create the controller
// $controller = new HomeController($twig);

// Controllers
$homeController = new HomeController($twig);

$dashboardController = new DashboardController($twig);
$signinController = new SigninController($twig);
$signupController = new signupController($twig);

// Call the controller’s index method
// $controller->index();

// Routes
$router->get('/', fn() => $homeController->index());
$router->get('/signin', fn() => $signinController->index());
$router->get('/signup', fn() => $signupController->index());
$router->get('/dashboard', fn() => $dashboardController->index());

// Optional: 404 page
$router->set404(function() use ($twig) {
    echo $twig->render('404.twig');
});

$router->run();