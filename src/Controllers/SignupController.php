<?php
namespace Tiwa\TicketManagementSystemTwig\Controllers;

use Twig\Environment;

class SignupController {
    private $twig;
    public function __construct(Environment $twig) {
        $this->twig = $twig;
    }

    public function index() {
        echo $this->twig->render('pages/AppSignUpForm.twig');
    }
}