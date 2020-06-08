<?php namespace App\Controllers;

use App\Models\UserModel;

class AuthenticationController extends BaseController
{
	public function register()
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
