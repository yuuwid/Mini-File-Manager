<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $primaryKey = 'id_manager';

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(Manager::class, 'id_manager', 'id_user');
    }
}
