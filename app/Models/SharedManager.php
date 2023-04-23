<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SharedManager extends Pivot
{
    protected $table = 'shared_manager';


    public function roles()
    {
        return $this->belongsTo(Role::class, 'id_role', 'id_role');
    }
}
