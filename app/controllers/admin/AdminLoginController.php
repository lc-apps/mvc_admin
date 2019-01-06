<?php 

namespace app\controllers\admin;

use app\controllers\ContainerController;

class AdminLoginController extends ContainerController {

	 public function store() {

	 	$loginValidate = new LoginValidate();
	 	$loginValidate->validate();

	 	if($loginValidate->hasErros()){

	 		return redirect('/admin');

	 	}

	 	auth(new Admin, $loginValidate);


	 	return redirect('/painel');


	 }
		


}

