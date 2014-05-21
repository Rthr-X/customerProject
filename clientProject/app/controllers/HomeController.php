<?php

class HomeController extends BaseController {

	public function index($route="home") {

        Debugbar::addMessage("HomeController::index - Opening route '{$route}'");

        switch($route) {
            case "about":
               return View::make('about');
                break;
            case "/":
            case "home":
                return View::make('home');
                break;
            default:
                return View::make('error404', ['url'=>$route]);
                break;
        }

	}

}
