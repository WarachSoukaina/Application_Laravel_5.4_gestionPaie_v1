<?php

namespace App\Http\Controllers;
use App\Employe;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $services = DB::table('services')->get();
        // la recupperation des services de la DB :
        
        //dd($service);

        return view('create',array('services'=> $services));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // l'affichage de la list des employés 
    public function index()
    {
       $employes = DB::table('employes')->orderBy('created_at', 'desc')
                                ->get();

        return view('employes',array('employes'=>$employes));
    }

    // la creation des employés :
    public function create(Request $request)
    {
        $dcnss=0;
        $damo=0;
        $dgir=0;

    	     $data = $request->all();

             $Nmatrecule=$data["Nmatrecule"];
             $nom= $data['nom'];
             $prenom=$data["prenom"]; 
             $adress=$data["adress"]; 
             $datenaissance=$data["datenaissance"]; 
             $tel=$data["tel"]; 
             $cin=$data["cin"]; 
             $sexe=$data["sexe"];
             $email=$data["email"];             
             $natio=$data["natio"]; 
              $rip=$data["rip"]; 
              $mode=$data["mode"]; 
              $bank=$data["bank"]; 
              $agence=$data["agence"]; 
              $service=$data["service"]; 
              $situation=$data["situation"]; 
              $enfants=$data["enfants"]; 
              $Ncnss=$data["Ncnss"];


              if(isset($data['cnss']))
              {
                    $dcnss=1;
              } 
              if(isset($data['amo']))
              {
                $damo=1;
              }
              if(isset($data['gir']))
              {
                $dgir=1;
              }
            // les informations generale d'employé :
              $employe = new Employe([
                'nmatricule'=>$Nmatrecule,
                'nom'=>$nom,
                'prenom'=>$prenom,
                'dnaiss'=>$datenaissance,
                'adres'=>$adress,
                'tel'=>$tel,
                'email'=>$email,
                'cin'=>$cin,
                'nationalite'=>$natio,
                'sexe'=>$sexe,
                'situation'=>$situation,
                'nenfant'=>$enfants,
                'rib'=>$rip,
                'mpaiment'=>$mode,
                'banque'=>$bank,
                'agence'=>$agence,
                'ncnss'=>$Ncnss,
                'dcnss'=>$dcnss,
                'damo'=>$damo,
                'dIgr'=>$dgir,]);                  

            $employe->service()->associate($service);
            $employe->save();


        $employes = DB::table('employes')->orderBy('created_at', 'desc')
                                ->get();

        return view('employes',array('employes'=>$employes));

  	     

    }


    // afficher les informations pour chaque employé :
    public function details($id)
    {
      $employe = DB::table('employes')->where('id',$id)
                                        ->first();
                                      
      // le service d'employé :
      $service_id=$employe->service_id;
      $service=DB::table('services')->where('id',$service_id)
                                    ->first();

      return view('detailemploye',array('employe'=>$employe,'service'=>$service));
    }

    public function updateEmploye(Request $request,$id)
      {
        $data=$request->all();

        $employe=Employe::find($id);

        dd($employe);
      }

    // l'ajout d'image :
    public function store(Request $request,$id)
   {
                /*
            $picture = $request->picture;
            $input['picture'] = time().'.'. $picture->getClientOriginalExtension();
            Image::make($picture)->resize(200,200)->save(public_path('/uploads/'.$input['picture']));
                      
            $employe = Employe::find($id);

            $employe->photo = $filename;
            $employe->save();      
        

         return redirect()->back();*/
              

      }  



      

}
