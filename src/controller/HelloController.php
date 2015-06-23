<?php

namespace SymFromScratch\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class HelloController extends Controller
{

    /**
     * Hello world action
     *
     * @param Request $request
     * @return Response
     */
    public function helloAction(Request $request)
    {
        return new Response('Hello ' . $request->get('name') ?: 'World',
            200,
            ['Content-Type' => 'text/plain']
        );
    }
}