<?php

namespace App\Controllers;

use App\Models\Dish;
use App\Core\Request;
use App\Core\Response;
use App\Core\Validator;
use App\Core\Authentication;

class DishController
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
     * Affiche la liste des plats.
     *
     * @return void
     */
    public function index()
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        $dishes = Dish::all();
        require '../views/dishes/index.php';
    }

    /**
     * Affiche le formulaire de création d'un plat.
     *
     * @return void
     */
    public function create()
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        require '../views/dishes/create.php';
    }

    /**
     * Enregistre un nouveau plat.
     *
     * @return void
     */
    public function store()
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        $data = $this->request->all();

        $rules = [
            'name' => 'required',
            'category_id' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ];

        if ($this->validator->validate($data, $rules)) {
            Dish::create($data);
            $this->response->redirect('/dishes');
        } else {
            $errors = $this->validator->errors();
            require '../views/dishes/create.php';
        }
    }

    /**
     * Affiche le formulaire d'édition d'un plat.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        $dish = Dish::find($id);
        if (!$dish) {
            return $this->response->notFound();
        }

        require '../views/dishes/edit.php';
    }

    /**
     * Met à jour un plat existant.
     *
     * @param int $id
     * @return void
     */
    public function update($id)
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        $dish = Dish::find($id);
        if (!$dish) {
            return $this->response->notFound();
        }

        $data = $this->request->all();

        $rules = [
            'name' => 'required',
            'category_id' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ];

        if ($this->validator->validate($data, $rules)) {
            $dish->update($data);
            $this->response->redirect('/dishes');
        } else {
            $errors = $this->validator->errors();
            require '../views/dishes/edit.php';
        }
    }

    /**
     * Supprime un plat.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        $dish = Dish::find($id);
        if ($dish) {
            $dish->delete();
        }

        $this->response->redirect('/dishes');
    }
}
