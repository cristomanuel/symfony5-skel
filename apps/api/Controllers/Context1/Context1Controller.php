<?php

declare(strict_types=1);

namespace Cmas\MyApp\Apps\api\Controllers\Context1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class Context1Controller extends AbstractController
{
    public function getIndex(Request $request) : JsonResponse
    {
        return new JsonResponse(json_encode(['message' => 'Hello world'], JSON_THROW_ON_ERROR), 200) ;
    }
}