<?php
namespace Vooneone\RsArmoCrm\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
class FormController extends Controller {
    public function index(): Response
    {
        return $this->render('app-form.html');
    }
}