<?php

namespace Cmas\MyApp\Apps\api\Controllers\Context1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Controller extends AbstractController
{
    public function actionIndex(Request $request) : Response
    {
        return new Response('', Response::HTTP_OK) ;
    }
}