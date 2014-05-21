<?php

class HomeController extends BaseController {

	public function index() {

        $debugbar = new DebugBar\StandardDebugBar();
        $debugbarRenderer = $debugbar->getJavascriptRenderer();

		return View::make('home', [
            'debugBarHeader' => $debugbarRenderer->renderHead(),
            'debugBarScripts' => $debugbarRenderer->render(),
        ]);

	}

}
