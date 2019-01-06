<?php

namespace app\controllers\admin;

use app\classes\Password;

class AdminController extends \app\controllers\ContainerController {



	public function index() {


		return toJson(Password::hash('123'));
		
		$this->view([
			'title' => 'Login',
		], 'admin.login');
	}

}