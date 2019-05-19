@extends('layouts.app')

@section('content')

        <div class="col-md-12">
          
            <div class="panel panel-default panel-info">
                <div class="panel-heading"><h3>Tableau de bord</h3> </div>

                <div class="panel-body">
                    
                  <style>
                  .logo {
                      font-size: 200px;
                  }
                  @media screen and (max-width: 768px) {
                      .col-sm-4 {
                          text-align: center;
                          margin: 25px 0;
                      }
                  }
                  </style>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>La gestion de paie </h2>
      <h4>la generation de bulletin de paie..</h4> 
      <p>les calcules automatiques..</p>
      <button class="btn btn-info btn-lg">A propos ...</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span> 
    </div>
    <div class="col-sm-8">
      <h2>les services</h2>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4> 
      <p><strong>VISION:</strong> Our vision Lorem ipsum..</p>
    </div>
  </div>
</div>

                </div>
            </div>
        </div>
 
@endsection
