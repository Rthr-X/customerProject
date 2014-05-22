<?php

class HomeController extends BaseController {

    public function missingMethod($params = []) {

        $message = "HomeController::index - Looking for route '{$params[0]}'";

        switch($params[0]) {
            case "about":

                $view = View::make('about');
                break;
            case "":
            case "/":
            case "home":
                $message .= " ('home')";
                $view = View::make('home');
                break;
            default:
                $warning = "HomeController::index - 404 Error: '".join("/", $params)."' unknown";
                $view = View::make('error404', ['url'=>$params[0]]);
                break;
        }

        Debugbar::addMessage( $message );
        if(isset($warning)) Debugbar::warning( $warning );

        return $view;

    }

}
