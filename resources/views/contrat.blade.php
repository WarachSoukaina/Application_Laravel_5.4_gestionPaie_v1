@extends('layouts.app')


@section('content')


    <h4 class="col-lg-12" style="color: white; font-weight: bolder;font-size:20px;text-align: center;">L'ajout de contrat pour chaque employé :</h4>
	
	<div class="row">
		<form method="POST" action="{{ url('/contrat') }}">
                        {{ csrf_field() }}

		<div class="col-md-12">
            <div class="panel with-nav-tabs panel-info">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1info" data-toggle="tab">Détails Contrat :</a></li>
                            
                            
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1info">
                        	
                        	<div class="row">
                        		<div class="form-group col-sm-4">
							      <label for="inputState6"> Employé :</label>
							      <select id="inputState6" name="employe" class="form-control">
							        <option>Employé1</option>
							        <option>Employé2</option>
							        <option>Employé3</option>
							        <option>Employé4</option>
							      </select>
							    </div>
							<div class="col-sm-4 form-group">
								<label>N° du Contrat :</label>
								<input type="text" name="Ncontrat" class="form-control">
							</div>		
							
							<div class="form-group col-sm-4">
							      <label for="inputState2"> Type de Contrat :</label>
							      <select id="inputState2" name="typecontrat" class="form-control">
							        <option>CDI</option>
							        <option>CDD</option>
							        <option>Anapec</option>
							        <option>...</option>
							      </select>
							    </div>

							    <div class="form-group col-sm-4">
							      <label for="inputState3"> Catégories :</label>
							      <select id="inputState3" name="cat" class="form-control">
							      	<option>Chef</option>
							        <option>Salarié</option>
							        
							       
							      </select>
							    </div>

							    <div class="col-sm-4 form-group">
								<label>Qualité :</label>
								<input type="text" name="qualite"  class="form-control">
							</div>	
							
					<div class="col-sm-4 form-group">
							<label>Salairé:</label>	 
				      <input type="checkbox" id="trigger" name="salarie">
				    
				    <div id="hidden_fields">
				      <label>Salaire de base:</label>
				       <input type="text" id="hidden_field" name="salaire" class="form-control">
				    </div>
					</div>
					<div class="col-sm-4 form-group">
				    <label>Horaire:</label>    
				      <input type="checkbox" id="trigger1" name="horaire" >
				    
				    <div id="hidden_fields1">
				      <label>Prix/Heur:</label> 
				     <input type="text" id="hidden_field1" name="prix" class="form-control">
				    </div>
				</div>					
				

							<div class="col-sm-4 form-group">
								<label>Date d'embauche :</label>
								<input type="date" name="datemb"  class="form-control">
							</div>		
							<div class="col-sm-4 form-group">
								<label>Date de fin du Contrat :</label>
								<input type="date" name="fincontrat" class="form-control">
							</div>	
						</div>

					
					<button type="submit" class="btn btn-lg btn-info">Enregistrer </button>
					<a href="{{url('/creer')}}"><button type="button" class="btn btn-lg btn-info"> Annuler </button></a>
                        </div>
                        
					</div>
				</form> 
                       
                    </div>
                
            </div>
        </div>
		
		
					 
				</div>
	
	</div>

<script>
	
	$(function() {
  
  // Get the form fields and hidden div
  var checkbox = $("#trigger");
  var hidden = $("#hidden_fields");  

  var checkbox1 = $("#trigger1");
  var hidden1 = $("#hidden_fields1");
 
  // Hide the fields.
  // Use JS to do this in case the user doesn't have JS 
  // enabled.
  hidden.hide();
  hidden1.hide();
  // Setup an event listener for when the state of the 
  // checkbox changes.
  checkbox.change(function() {
    // Check to see if the checkbox is checked.
    // If it is, show the fields and populate the input.
    // If not, hide the fields.
    if (checkbox.is(':checked')) {
      // Show the hidden fields.
      hidden.show();
      hidden1.hide();
     
    } else {
      // Make sure that the hidden fields are indeed
      // hidden.
      hidden.hide();
      
      // You may also want to clear the value of the 
      // hidden fields here. Just in case somebody 
      // shows the fields, enters data to them and then 
      // unticks the checkbox.
      //
      // This would do the job:
      //
      // $("#hidden_field").val("");
    }
  });

  // checkbox changes.
  checkbox1.change(function() {
    // Check to see if the checkbox is checked.
    // If it is, show the fields and populate the input.
    // If not, hide the fields.
    if (checkbox1.is(':checked')) {
      // Show the hidden fields.
      hidden1.show();
      hidden.hide();
    } else {
      // Make sure that the hidden fields are indeed
      // hidden.
      hidden1.hide();
      
      // You may also want to clear the value of the 
      // hidden fields here. Just in case somebody 
      // shows the fields, enters data to them and then 
      // unticks the checkbox.
      //
      // This would do the job:
      //
      // $("#hidden_field").val("");
    }
  });
});
</script>
@endsection