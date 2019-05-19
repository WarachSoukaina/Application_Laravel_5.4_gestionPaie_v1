<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description',];

    function employe()
    {
        return $this->hasMany(Employe::class);
        /*chaque Service A beaucoup d'employé */
    }

}
