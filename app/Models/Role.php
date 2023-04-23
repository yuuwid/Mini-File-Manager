<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'id_role';

    public $timestamps = false;



    public function sharedmanager()
    {
        return $this->hasMany(SharedManager::class, 'id_role', 'id_role');
    }
}
