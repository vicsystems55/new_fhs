<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationStage extends Model
{
    //
    protected $guarded = [];

    public function personalinfo()
    {
        # code...
        return $this->belongsTo('App\PersonalInfo');
    }
}
