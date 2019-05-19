<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tcontrat','qualite','categorie','dateEmb','dateFC','salaire','prixHeur',];


    function employe()
    {
        return $this->belongsTo(Employe::class);
        /*chaque contrat appartient a un seul employé => 'empId' */
    }

}
