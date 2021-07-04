<?php

declare(strict_types=1);

namespace Cmas\MyApp\Apps\api\Controllers\Context1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Context1Controller extends AbstractController
{
    private const HELLO_WORLD = ["message" => "Hello world"] ;

    public function getIndex(Request $request) : Response
    {
        return new Response(json_encode(self::HELLO_WORLD),Response::HTTP_OK) ;
    }
}