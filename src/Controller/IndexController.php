<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function index($slug = null): Response
    {
        if (empty($slug) || !in_array($slug, ['noblechairs', 'endgamegear']) ) {
            return $this->redirect('/noblechairs', 301);
        }

        return $this->render('pages/'. $slug .'/homepage.html.twig');
    }
}
