@extends('layouts.app')


@section('content')


    <h4 class="col-lg-12" style="color: white; font-weight: bolder;font-size:20px;text-align: center;">L'ajout d'un nouveaux employé :</h4>
	
	<div class="row">
		<form method="POST" action="{{ url('/create') }}" >


                        {{ csrf_field() }}

		<div class="col-md-12">
            <div class="panel with-nav-tabs panel-info">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1info" data-toggle="tab"><b>Informations géneral :</b></a></li>
                                                       
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1info">
                        	<div class="row">
							<div class="col-sm-3 form-group">
								<label for="nom">Nom* :</label>
								<input type="text" id="nom" class="form-control" name="nom" required>
							</div>
							<div class="col-sm-3 form-group">
								<label for="prenom">Prénom* :</label>
								<input type="text" id="prenom" class="form-control" name="prenom" required>
							</div>
							<div class="form-group col-sm-4">
							<label for="adress">Adresse*</label>
							<textarea  rows="2" id="adress" class="form-control" name="adress" required></textarea>
						</div>
						</div>					
							
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>Date de naissance :</label>
								<input type="date"  class="form-control" name="datenaissance" required>
							</div>	
							<div class="col-sm-3 form-group">
								<label>Tel :</label>
								<input type="text" name="tel" class="form-control" required>
							</div>	
							<div class="col-sm-2 form-group">
								<label>CIN :</label>
								<input type="text" name="cin"  class="form-control" required>
							</div>	
							<div class="form-group col-sm-2">
							      <label for="inputState">Vous êtes* :</label>
							      <select id="inputState" name="sexe" class="form-control" required>
							        <option>Homme</option>
							        <option>Femme</option>
							      </select>
							    </div>	
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Email* :</label>
								<input type="email" name="email" class="form-control" required>
							</div>		
							
							    <div class="col-sm-3 form-group">
								<label>Nationalité :</label>
								<input type="text"  name="natio" class="form-control" required>
							</div>		
							<div class="col-sm-3 form-group">
								<label>RIP :</label>
								<input type="text" name="rip" class="form-control" required>
							</div>

							<div class="col-sm-3 form-group">
								<label>Mode de paiment :</label>
								<input type="text" name="mode" class="form-control" required>
							</div>		
							<div class="col-sm-2 form-group">
								<label>Banque :</label>
								<input type="text" name="bank"  class="form-control" required>
							</div>

							<div class="col-sm-2 form-group">
								<label>Agence :</label>
								<input type="text" name="agence" class="form-control" required>
							</div>
							<div class="col-sm-3 form-group">
								<label for="inputState4">Service :</label>
							      <select id="inputState4" name="service" class="form-control" required>
							      	@if(isset($services))
							      	@foreach($services as $service)
							        <option value="{{$service->id}}">{{$service->description}}</option>

							        @endforeach
							        @endif
							      </select>
								
							</div>	
							<div class="col-sm-3 form-group">
								<label>N° du Matrécule :</label>
								<input type="text" name="Nmatrecule" class="form-control" required>
							</div>	
								
							<div class="col-sm-2 form-group">
								<label for="inputState1">Vous êtes* :</label>
							      <select id="inputState1" name="situation" class="form-control" required>
							        <option>C</option>
							        <option>M</option>
							        <option>D</option>

							      </select>
							</div>
							<div class="col-sm-2 form-group">
								<label>Nombre d'enfants :</label>
								<input type="number" name="enfants" class="form-control" required>
							</div>
							<div class="col-sm-4 form-group" >

					<label>Déclaration social :</label><br>

					<label class="checkbox-inline"><input type="checkbox" value="1" name="cnss" >CNSS</label>
					<label class="checkbox-inline"><input type="checkbox" value="1" name="amo">AMO</label>
					<label class="checkbox-inline"><input type="checkbox" value="1" name="gir">IGR</label>
				</div>

				<div class="col-sm-4 form-group">
								<label> N° CNSS :</label>
								<input type="text" name="Ncnss" class="form-control">
							</div>
						</div>
						

                    </div>

                        <button type="submit" class="btn btn-lg btn-info">Enregistrer </button>
					<a href="{{url('/creer')}}"><button type="button" class="btn btn-lg btn-info"> Annuler </button></a>
					
					</div>
				</form> 
                       
                    </div>
                
            </div>
        </div>
		
		
					 
				</div>
	
	</div>

@endsection