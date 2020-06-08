<?php namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		$userModel = new UserModel();
		$data = array();
		$data['users'] = $userModel->findAll();

		return $this->response
			->setStatusCode(200)
			->setContentType('application/json')
			->setJSON($data);
	}
}
