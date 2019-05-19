<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['dateAvance','montantAvance',];


    function employe()
    {
        return $this->belongsTo(Employe::class);
        /*chaque Avance appartient a un seul employé => 'empId' */
    }
}
