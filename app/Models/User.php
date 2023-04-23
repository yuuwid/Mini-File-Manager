<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'id_user';

    public function manager()
    {
        return $this->belongsToMany(Manager::class, 'id_user', 'id_manager');
    }
}
