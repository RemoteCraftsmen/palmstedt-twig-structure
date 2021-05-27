<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function index($slug): Response
    {
        if (empty($slug) || !in_array($slug, ['noblechairs', 'endgamegear']) ) {
            return new Response(
                '<html><body>Not found</body></html>'
            );
        }

        return $this->render('pages/'. $slug .'/homepage.html.twig');
    }
}
