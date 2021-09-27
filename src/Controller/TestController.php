<?php
# User: isxoq
# Date: 25.09.2021
# Time: 22:35
# Year: 2021
# Project: todo
# Full Name: Isxoqjon Axmedov
# Phone: +998936448111

// src/Controller/TestController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TestController
{
    /**
     * @Route("/test/number")
     * @throws \Exception
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }
}
