<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Description of WebController
 *
 * @author bigno
 */
class WebController extends AbstractController{
    /**
     * @Route("/Web", name="Web")
     * @return Response
     */
    public function index(): Response{
        return $this->render("pages/Web.html.twig");
    }
}
