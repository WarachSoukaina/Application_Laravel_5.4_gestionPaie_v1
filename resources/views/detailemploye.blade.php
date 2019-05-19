@extends('layouts.app')

@section('content')

	<div class="row">
		
       <div class="col-md-10">

<div class="panel panel-default panel-info">
  <div class="panel-heading">  
  	<h4>Profil d'employé </h4>
  </div>
  @if(isset($employe))
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
              <div  align="center"> 
                <form method="POST" action="/photo/{{$employe->id}}" files="true" >
                                          {{ csrf_field() }}

                <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                <input id="profile-image-upload" class="hidden" type="file" name="picture" required>
          <div style="color:#999;" >cliquer sur la photo pour la changer </div>
          
          <button type="submit" class="btn btn-info"> valider </button>

          </form>
                     </div>              
              <br>
                  <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">{{$employe->nom}} {{$employe->prenom}}</h4>
              <span><p><button  data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary "> Modifier les informations </button> </p></span> 
          
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
                
                          
            <div class="col-sm-5 col-xs-6 tital " > Nom:</div>
            <div class="col-sm-7 col-xs-6 ">{{$employe->nom}}</div>
                 <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " > Prènom:</div>
            <div class="col-sm-7"> {{$employe->prenom}}</div>
              <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " > Date de naissance :</div>
            <div class="col-sm-7"> {{$employe->dnaiss}} </div>
              <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " > Adress:</div>
            <div class="col-sm-7">{{$employe->adres}} </div>

              
             <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " > Tel :</div>
            <div class="col-sm-7">{{$employe->tel}}</div>
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " > CIN : </div>
            <div class="col-sm-7">{{$employe->cin}}</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>


            <div class="col-sm-5 col-xs-6 tital " >Vous êtes : </div>
            <div class="col-sm-7">{{$employe->sexe}}</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Email : </div>
            <div class="col-sm-7">{{$employe->email}}</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>


            <div class="col-sm-5 col-xs-6 tital " >Nationalité : </div>
            <div class="col-sm-7">{{$employe->nationalite}}</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >RIP : </div>
            <div class="col-sm-7">{{$employe->rib}}</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Mode de paiment : </div>
            <div class="col-sm-7">{{$employe->mpaiment}}</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Banque : </div>
            <div class="col-sm-7">{{$employe->banque}}</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Agence : </div>
            <div class="col-sm-7">{{$employe->agence}}</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Service : </div>
            <div class="col-sm-7">@if(isset($service)){{$service->description}}@endif</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >N° du Matrécule : </div>
            <div class="col-sm-7">{{$employe->nmatricule}}</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Situation familiale : </div>
            <div class="col-sm-7">{{$employe->situation}}</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital"> Nombre d'enfants :</div>
            <div class="col-sm-7">{{$employe->nenfant}}</div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital"> N° CNSS :</div>
            <div class="col-sm-7">{{$employe->ncnss}}</div> 

            <div class="clearfix"></div>
            <div class="bot-border"></div>

                    <div class="col-sm-5 col-xs-6 tital"> Déclaration social :</div>
                    <div class="col-sm-7">@if($employe->dcnss =='1')
                     <p> * CNSS  </p>
                      @endif
                    @if($employe->damo=='1')
                     <p> * AMO  </p>
                      @endif
                      @if($employe->dIgr=='1')
                      <p> * IGR  </p>
                      @endif
            </div> 

            <div class="clearfix"></div>
            <div class="bot-border"></div>
                        <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div>


    @endif 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
          
   </div>
</div>





<!-- line modal -->
<div class="modal fade" id="squarespaceModal"  role="dialog" >
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">Close</button>
      <h4 class="modal-title" id="lineModalLabel">modifier les informations d'employe</h4>
    </div>
    <div class="modal-body">
      
                   <form method="POST" action="/edit/{{$employe->id}}">
                    {{ csrf_field() }}
            <div class="col-sm-5 col-xs-6 tital"> Nom:</div>
            <div class="col-sm-7 col-xs-6 "><input type="text" class="form-control" name="nom" value="{{$employe->nom}}"> </div>
                 <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " > Prènom:</div>
            <div class="col-sm-7"><input type="text" class="form-control" name="prenom" value="{{$employe->prenom}}"></div>
              <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " > Date de naissance :</div>
            <div class="col-sm-7"><input type="text" class="form-control" name="dnaiss" value="{{$employe->dnaiss}}">  </div>
              <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " > Adress:</div>
            <div class="col-sm-7"><input type="text" class="form-control" name="adress" value="{{$employe->adres}}"> </div>

              
             <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " > Tel :</div>
            <div class="col-sm-7"><input type="text" class="form-control" name="tel" value="{{$employe->tel}}"></div>
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " > CIN : </div>
            <div class="col-sm-7"><input type="text" class="form-control" name="cin" value="{{$employe->cin}}"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>


            <div class="col-sm-5 col-xs-6 tital " >Vous êtes : </div>
            <div class="col-sm-7"><input type="text" class="form-control" name="sexe" value="{{$employe->sexe}}"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Email : </div>
            <div class="col-sm-7"><input type="email" class="form-control" name="email" value="{{$employe->email}}"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>


            <div class="col-sm-5 col-xs-6 tital " >Nationalité : </div>
            <div class="col-sm-7"><input type="text" class="form-control" name="nationalite" value="{{$employe->nationalite}}"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >RIP : </div>
            <div class="col-sm-7"><input type="text" class="form-control" name="rip" value="{{$employe->rib}}"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Mode de paiment : </div>
            <div class="col-sm-7"><input type="text" class="form-control" name="mpaiment" value="{{$employe->mpaiment}}"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Banque : </div>
            <div class="col-sm-7"><input type="text" class="form-control" name="banque" value="{{$employe->banque}}"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Agence : </div>
            <div class="col-sm-7"><input type="text" class="form-control" name="agence" value="{{$employe->agence}}"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Service : </div>
            <div class="col-sm-7"><input type="text" class="form-control" name="service" value="@if(isset($service)){{$service->description}}@endif"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >N° du Matrécule : </div>
            <div class="col-sm-7"><input type="text" class="form-control" name="nmatricule" value="{{$employe->nmatricule}}"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital " >Situation familiale : </div>
            <div class="col-sm-7"><input type="text" class="form-control" name="situation" value="{{$employe->situation}}"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital"> Nombre d'enfants :</div>
            <div class="col-sm-7"><input type="text" class="form-control" name="nenfant" value="{{$employe->nenfant}}"></div> 
            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <div class="col-sm-5 col-xs-6 tital"> N° CNSS :</div>
            <div class="col-sm-7"><input type="text" class="form-control" name="ncnss" value="{{$employe->ncnss}}"></div> 

            <div class="clearfix"></div>
            <div class="bot-border"></div>

            <button class="btn btn-success">Enregister</button>
          </form>
    </div>

  </div>
  </div>
</div>

         


@endsection