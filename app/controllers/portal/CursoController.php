<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;

class CursoController extends ContainerController {

	public function index() {

		$this->view([
			'title' => 'Curso',
			'curso' => 'Index',
		], 'portal.curso');
	
	}

	public function show($request) {

		$this->view([
			'title' => 'Curso',
			'curso' => 'teste de view curso',
		], 'portal.curso');
	}

	public function create() {

	}

	public function store() {

	}

	public function edit($id) {

	}

	public function update($id) {

	}

	public function destroy($id) {

	}

}
