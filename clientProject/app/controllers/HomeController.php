<?php

class HomeController extends BaseController {

	public function index() {
#        use DebugBar\StandardDebugBar;

        $debugbar = new DebugBar\StandardDebugBar();
        $debugbarRenderer = $debugbar->getJavascriptRenderer();

        $debugbar["messages"]->addMessage("hello world!");


		return View::make('home', [
            'debugBarHeader' => $debugbarRenderer->renderHead(),
            'debugBarScripts' => $debugbarRenderer->render(),
        ]);

	}

}
