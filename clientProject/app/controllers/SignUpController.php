<?php

	class SignUpController extends BaseController {

		public function signin() {
			$email = Input::get('email');
			$password = Input::get('password');
			if (Auth::attempt(array('email' => $email, 'password' => $password), true)){
				return Redirect::to('user/login');
			} else {
				return Redirect::to('user/register');
			}
		}

		public function missingMethod($params = []) {
			Debugbar::addMessage("HomeController::index - Opening route '{$params[0]}'");
			return View::make('home');

		}

	}
