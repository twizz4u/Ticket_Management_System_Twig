<?php
namespace Tiwa\TicketManagementSystemTwig\Controllers;

use Twig\Environment;

class SigninController {
    private $twig;
    public function __construct(Environment $twig) {
        $this->twig = $twig;
    }

    public function index() {
        echo $this->twig->render('pages/AppSigninForm.twig');
    }
}