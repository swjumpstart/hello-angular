<?php namespace App\Models;


use CodeIgniter\Model;
use http\Client\Curl\User;

class UserModel extends Model
{
	protected $table = 'user';
	protected $returnType = '\App\Entities\User';
}
