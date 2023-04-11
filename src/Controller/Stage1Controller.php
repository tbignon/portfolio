<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Description of Stage1Controller
 *
 * @author bigno
 */
class Stage1Controller extends AbstractController{
    /**
     * @Route("/Stage1", name="Stage1")
     * @return Response
     */
    public function index(): Response{
        return $this->render("pages/Stage1.html.twig");
    }
}
