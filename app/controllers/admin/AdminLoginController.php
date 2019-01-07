<?php 

namespace app\controllers\admin;

use app\controllers\ContainerController;

use app\validade\admin\Login as LoginValidate;

use app\classes\Login;

class AdminLoginController extends ContainerController {

	 public function store() {

	 	$login = (new LoginValidate())->validate();


	 	if($loginValidate->hasErros()){

	 		return redirect('/admin');

	 	}

	 	auth(new Admin, $loginValidate);


	 	return redirect('/painel');


	 }
		


}

