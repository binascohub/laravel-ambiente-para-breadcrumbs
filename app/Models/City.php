<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * Notice that guarded is set to an empty array, this is because we intend
     * to do some form of mass assignment when seeding the database. Whenever you
     * make a change like this to a model file, always remember to revert the change
     * before the application gets to production stage.
     */
    protected $guarded = [];
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
