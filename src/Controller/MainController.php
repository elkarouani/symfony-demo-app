<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        // return $this->json([
        //     'message' => 'Welcome to your new controller!'
        // ]);
        // return new Response('<h1>Welcome to your new controller!</h1>');
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/custom/{name?}", name="custom")
     * @param Request $request
     * @return Response
     */
    public function custom(Request $request)
    {
        // dump($request->get('name'));
        return new Response('<h1>Welcome ' . $request->get('name') . ' </h1>');
    }
}
