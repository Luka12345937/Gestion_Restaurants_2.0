<?php

namespace App\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Core\Request;
use App\Core\Response;
use App\Core\Validator;
use App\Core\Authentication;

class OrderController
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
     * Affiche la liste des commandes.
     *
     * @return void
     */
    public function index()
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        $orders = Order::with('user')->get();
        require '../views/orders/index.php';
    }

    /**
     * Affiche le formulaire de création d'une commande.
     *
     * @return void
     */
    public function create()
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        $users = User::all();
        require '../views/orders/create.php';
    }

    /**
     * Enregistre une nouvelle commande.
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
            'user_id' => 'required|integer',
            'total' => 'required|numeric',
            'status' => 'required|in:pending,processing,delivered,cancelled',
        ];

        if ($this->validator->validate($data, $rules)) {
            Order::create($data);
            $this->response->redirect('/orders');
        } else {
            $errors = $this->validator->errors();
            $users = User::all();
            require '../views/orders/create.php';
        }
    }

    /**
     * Affiche le détail d'une commande.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        $order = Order::with('user')->find($id);
        if (!$order) {
            return $this->response->notFound();
        }

        require '../views/orders/show.php';
    }

    /**
     * Affiche le formulaire d'édition d'une commande.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        $order = Order::find($id);
        if (!$order) {
            return $this->response->notFound();
        }

        $users = User::all();
        require '../views/orders/edit.php';
    }

    /**
     * Met à jour une commande existante.
     *
     * @param int $id
     * @return void
     */
    public function update($id)
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        $order = Order::find($id);
        if (!$order) {
            return $this->response->notFound();
        }

        $data = $this->request->all();

        $rules = [
            'user_id' => 'required|integer',
            'total' => 'required|numeric',
            'status' => 'required|in:pending,processing,delivered,cancelled',
        ];

        if ($this->validator->validate($data, $rules)) {
            $order->update($data);
            $this->response->redirect('/orders');
        } else {
            $errors = $this->validator->errors();
            $users = User::all();
            require '../views/orders/edit.php';
        }
    }

    /**
     * Supprime une commande.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        if (!$this->auth->isAuthenticated()) {
            return $this->response->redirect('/login');
        }

        $order = Order::find($id);
        if ($order) {
            $order->delete();
        }

        $this->response->redirect('/orders');
    }
}
