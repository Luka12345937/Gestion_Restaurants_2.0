<?php

namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['username', 'email', 'password', 'role'];
    protected $hidden = ['password'];

    /**
     * Récupère tous les utilisateurs.
     *
     * @return array
     */
    public static function all()
    {
        return parent::all();
    }

    /**
     * Récupère un utilisateur par son ID.
     *
     * @param int $id
     * @return User|null
     */
    public static function find($id)
    {
        return parent::find($id);
    }

    /**
     * Crée un nouvel utilisateur.
     *
     * @param array $data
     * @return User
     */
    public static function create(array $data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        return parent::create($data);
    }

    /**
     * Met à jour un utilisateur existant.
     *
     * @param array $data
     * @return bool
     */
    public function update(array $data)
    {
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        }
        return parent::update($data);
    }

    /**
     * Supprime un utilisateur.
     *
     * @return bool
     */
    public function delete()
    {
        return parent::delete();
    }

    /**
     * Vérifie si le mot de passe correspond.
     *
     * @param string $password
     * @return bool
     */
    public function checkPassword($password)
    {
        return password_verify($password, $this->password);
    }
}
