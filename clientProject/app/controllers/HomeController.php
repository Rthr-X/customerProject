<?php

class HomeController extends BaseController {

    public function missingMethod($params = []) {

        Debugbar::addMessage("HomeController::index - Opening route '{$params[0]}'");

        switch($params[0]) {
            case "about":
                return View::make('about');
                break;
            case "/":
            case "home":
                return View::make('home');
                break;
            default:
                return View::make('error404', ['url'=>$params[0]]);
                break;
        }

#        dd($params);
    }

}
