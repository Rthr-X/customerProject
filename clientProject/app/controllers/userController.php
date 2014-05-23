<?php

	class userController extends BaseController {

		public function home($userID = null) {
			return View::make('user/home');
		}

		public function signin() {
			$email = Input::get('email');
			$password = Input::get('password');
			if (Auth::attempt(array('email' => $email, 'password' => $password), true)){
				return Redirect::to('loggedin');
			} else {
				return Redirect::to('register/')->with('email',$email);
			}
		}
		public function registration(){
			$email = Session::get('email');
			return View::make('user.register',array('email'=>$email));
		}
		public function loggedin(){
			$email = Session::get('email');
			return View::make('user.loggedin',array('email'=>$email));
		}
		public function missingMethod($params = []) {

			Debugbar::addMessage("HomeController::index - Opening route '{$params[0]}'");
			return 'Hello Missing Method';# Redirect::to('home');

		}

	}
