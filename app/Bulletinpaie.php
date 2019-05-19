<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulletinpaie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['dateBp','salaireNet','salaireBrut','enciennete','mcnss','mamo','migr','nTotalHeur','nTotalJour',];

    function employe()
    {
        return $this->belongsTo(Employe::class);
        /*chaque bulletin appartient a un seul employé => 'empId' */
    }
}
