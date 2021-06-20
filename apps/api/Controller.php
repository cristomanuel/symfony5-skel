<?php


namespace Cmas\App\Apps\api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends AbstractController
{
    public function actionIndex() : Response
    {
        return new Response('',Response::HTTP_OK) ;
    }
}