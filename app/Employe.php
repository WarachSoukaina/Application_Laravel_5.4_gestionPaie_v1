<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nmatricule','nom','prenom','dnaiss','adres','tel','email','cin','photo','nationalite','sexe','situation','nenfant' ,'rib','mpaiment','banque','agence','ncnss','dcnss','damo','dIgr',];


    	function service()
    {
        return $this->belongsTo(Service::class);
        /*chaque employé appartient a une service => 'serviceId' */
    }


        function presence()
    {
        return $this->hasMany(Presence::class);
        /*chaque employé A beaucoup de presence */
    }

        function contrat()
     {
         return $this->hasMany(Contrat::class);
         /* chaque employé a beaucoup de contrat */
     }

        function avance()
     {
         return $this->hasMany(Avance::class);
         /* chaque employé a beaucoup d'avance' */
     }


        function bulletinPaie()
     {
         return $this->hasMany(Bulletinpaie::class);
         /* chaque employé a beaucoup de bulletinPaie */
     }

       
}
