<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateurs extends Model implements Authenticatable
{
    use HasFactory;

    use BasicAuthenticatable;

    protected $fillable = ['nom', 'prenom', 'email', 'tel', 'adresse', 'role', 'mot_de_passe'];

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }
}
