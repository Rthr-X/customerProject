<?php

	class userController extends BaseController {

		public function home($userID = null) {
			return View::make('user/home');
		}

		public function signin() {
			$email = Input::get('email');
			$password = Input::get('password');
			if (Auth::attempt(array('email' => $email, 'password' => $password), true)){
				return Redirect::to('user/login');
			} else {
				return 'Hello Signin';# Redirect::to('home');
			}
		}

		public function missingMethod($params = []) {

			Debugbar::addMessage("HomeController::index - Opening route '{$params[0]}'");
			return 'Hello Missing Method';# Redirect::to('home');

		}

	}
