<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
	private $userModel;

	public function __construct()
	{
		$this->userModel = new UserModel();
	}

	public function index()
	{
		return view('users', [
			'users' => $this->userModel->paginate(10),
			'pager' => $this->userModel->pager
		]);
	}

	public function delete($id)
	{
		if ($this->userModel->delete($id)) {
			echo view('messages', [
				'message' => 'Usuário Excluído com Sucesso'
			]);
		} else {
			echo "Erro.";
		}
	}

	public function create()
	{
		return view('form');
	}

	public function store()
	{
		if ($this->userModel->save($this->request->getPost())) {
			return view("messages", [
				'message' => 'Usuário salvo com sucesso'
			]);
		} else {
			echo "Ocorreu um erro.";
		}
	}

	public function edit($id)
	{
		return view('form', [
			'user' => $this->userModel->find($id)
		]);
	}
}
