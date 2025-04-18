<?php

namespace App\Controllers;

use App\Models\User;
use App\Core\Request;
use App\Core\Response;
use App\Core\Validator;
use App\Core\Authentication;

class UserController
{
    private $request;
    private $response;
    private $validator;
    private $auth;

    public function __construct(Request $request, Response $response, Validator $validator, Authentication $auth)
    {
        $this->request = $request;
        $this->response = $response;
        $this->validator = $validator;
        $this->auth = $auth;
    }

    /**
     * Affiche la liste des utilisateurs.
     *
     * @return void
     */
    public function index()
    {
        if (!$this->auth->isAdmin()) {
            return $this->response->redirect('/login');
        }

        $users = User::all();
        require '../views/users/index.php';
    }

    /**
     * Affiche le formulaire de création d'un utilisateur.
     *
     * @return void
     */
    public function create()
    {
        if (!$this->auth->isAdmin()) {
            return $this->response->redirect('/login');
        }

        require '../views/users/create.php';
    }

    /**
     * Enregistre un nouvel utilisateur.
     *
     * @return void
     */
    public function store()
    {
        if (!$this->auth->isAdmin()) {
            return $this->response->redirect('/login');
        }

        $data = $this->request->all();

        $rules = [
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,user',
        ];

        if ($this->validator->validate($data, $rules)) {
            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
            User::create($data);
            $this->response->redirect('/users');
        } else {
            $errors = $this->validator->errors();
            require '../views/users/create.php';
        }
    }

    /**
     * Affiche le formulaire d'édition d'un utilisateur.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        if (!$this->auth->isAdmin()) {
            return $this->response->redirect('/login');
        }

        $user = User::find($id);
        if (!$user) {
            return $this->response->notFound();
        }

        require '../views/users/edit.php';
    }

    /**
     * Met à jour un utilisateur existant.
     *
     * @param int $id
     * @return void
     */
    public function update($id)
    {
        if (!$this->auth->isAdmin()) {
            return $this->response->redirect('/login');
        }

        $user = User::find($id);
        if (!$user) {
            return $this->response->notFound();
        }

        $data = $this->request->all();

        $rules = [
            'username' => 'required|unique:users,username,' . $id,
            'password' => 'sometimes|min:6',
            'role' => 'required|in:admin,user',
        ];

        if ($this->validator->validate($data, $rules)) {
            if (isset($data['password'])) {
                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
            }
            $user->update($data);
            $this->response->redirect('/users');
        } else {
            $errors = $this->validator->errors();
            require '../views/users/edit.php';
        }
    }

    /**
     * Supprime un utilisateur.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        if (!$this->auth->isAdmin()) {
            return $this->response->redirect('/login');
        }

        $user = User::find($id);
        if ($user) {
            $user->delete();
        }

        $this->response->redirect('/users');
    }
}
