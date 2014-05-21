<?php

class HomeController extends BaseController {

	public function index($route="home") {

        Debugbar::addMessage("Opening route '{$route}'");

        switch($route) {
            case "about":
               return View::make('about', []);

            case "home":
            default:
                return View::make('home', []);
                break;
        }

	}

}
