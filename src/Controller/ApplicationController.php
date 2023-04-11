<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Description of ApplicationController
 *
 * @author bigno
 */
class ApplicationController extends AbstractController{
    /**
     * @Route("/Application", name="Application")
     * @return Response
     */
    public function index(): Response{
        return $this->render("pages/Application.html.twig");
    }
}
