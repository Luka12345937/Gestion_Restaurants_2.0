<?php

namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['user_id', 'total', 'status'];

    /**
     * Récupère toutes les commandes.
     *
     * @return array
     */
    public static function all()
    {
        return parent::all();
    }

    /**
     * Récupère une commande par son ID.
     *
     * @param int $id
     * @return Order|null
     */
    public static function find($id)
    {
        return parent::find($id);
    }

    /**
     * Crée une nouvelle commande.
     *
     * @param array $data
     * @return Order
     */
    public static function create(array $data)
    {
        return parent::create($data);
    }

    /**
     * Met à jour une commande existante.
     *
     * @param array $data
     * @return bool
     */
    public function update(array $data)
    {
        return parent::update($data);
    }

    /**
     * Supprime une commande.
     *
     * @return bool
     */
    public function delete()
    {
        return parent::delete();
    }

    /**
     * Récupère l'utilisateur associé à la commande.
     *
     * @return User|null
     */
    public function user()
    {
        return User::find($this->user_id);
    }

    /**
     * Récupère les détails de la commande (lignes de commande).
     *
     * @return array
     */
    public function details()
    {
        return OrderDetail::where('order_id', $this->id)->get();
    }
}
