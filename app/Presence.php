<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['datt','njour','nheur',];

    function employe()
    {
        return $this->belongsTo(Employe::class);
        /*chaque presence appartient a un seul employé => 'empId' */
    }
}
