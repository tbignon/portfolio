<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Description of Stage2Controller
 *
 * @author bigno
 */
class Stage2Controller extends AbstractController{
    /**
     * @Route("/Stage2", name="Stage2")
     * @return Response
     */
    public function index(): Response{
        return $this->render("pages/Stage2.html.twig");
    }
}