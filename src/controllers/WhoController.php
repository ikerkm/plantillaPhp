<?php
namespace App\controllers;
class WhoController extends Controller{
    public function index(){
        $this ->viewManager->renderTemplate("WhoWeAre.view.html");
    }

}