<?php

namespace Vooneone\RsArmoCrm\Controllers;

use GuzzleHttp\Psr7\Response;
class Controller
{
    public function render(string $templateName): Response
    {
        $html = file_get_contents('../templates/' . $templateName);
        $response = new Response();
        $response->getBody()->write($html);
        return $response->withStatus(200);
    }
}