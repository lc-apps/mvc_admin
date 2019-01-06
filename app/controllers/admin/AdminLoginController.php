<?php 

namespace app\controllers\admin;

use app\controllers\ContainerController;

class AdminLoginController extends ContainerController {

	 public function store()

		{
			return toJson($_POST);
		}

}