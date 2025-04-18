<?php

namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class Dish extends Model
{
    protected $table = 'dishes';
    protected $fillable = ['name', 'category_id', 'price', 'description', 'image'];

    /**
     * Récupère tous les plats.
     *
     * @return array
     */
    public static function all()
    {
        return parent::all();
    }

    /**
     * Récupère un plat par son ID.
     *
     * @param int $id
     * @return Dish|null
     */
    public static function find($id)
    {
        return parent::find($id);
    }

    /**
     * Crée un nouveau plat.
     *
     * @param array $data
     * @return Dish
     */
    public static function create(array $data)
    {
        return parent::create($data);
    }

    /**
     * Met à jour un plat existant.
     *
     * @param array $data
     * @return bool
     */
    public function update(array $data)
    {
        return parent::update($data);
    }

    /**
     * Supprime un plat.
     *
     * @return bool
     */
    public function delete()
    {
        return parent::delete();
    }

    /**
     * Récupère la catégorie associée au plat.
     *
     * @return Category|null
     */
    public function category()
    {
        return Category::find($this->category_id);
    }
}
