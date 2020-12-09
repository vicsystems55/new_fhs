<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    //
    protected $guarded = [];  
    public function users()
    {
        # code...
        return $this->belongsTo('App\User', 'action_by');
    }
}
