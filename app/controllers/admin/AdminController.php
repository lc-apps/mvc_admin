<?php

namespace app\controllers\admin;

class AdminController extends \app\controllers\ContainerController {



	public function index() {

		return toJson(['name' => 'Carlos']);

		
		$this->view([
			'title' => 'Login',
		], 'admin.login');
	}

}