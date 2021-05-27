<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function noblechairs(): Response
    {
        return $this->render('pages/noblechairs/homepage.html.twig');
    }
}
