@extends('layouts.app')

@section('content')

  <style type="text/css">
    
    .btn-huge{
    padding-top:20px;
    padding-bottom:20px;
    margin-bottom: 5px;
}
  </style>
   <div class="panel panel-default panel-info">
        <div class="panel-heading">Bulletin de paie </div>
  <div class="row col-sm-offset-2">
       
        <br>
        <div class="form-group col-sm-3">
                    <label for="inputState">Service :</label>
                    <select id="inputState" name="service" class="form-control">
                      @for($i=1;$i<'10';$i++)
                      <option>Service {{$i}}</option>                      
                      @endfor
                    </select>
        </div>

        <div class="form-group col-sm-3">
                    <label for="inputState">Année :</label>
                    <select id="inputState" name="service" class="form-control">
                      @for($i=0;$i<'20';$i++)
                      <option>{{2017+$i}}</option>                      
                      @endfor
                    </select>
        </div>
    
    <br>
    </div>
  
     <div class="row col-sm-offset-2 ">
        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-success btn-lg btn-block btn-huge">Janvier</a>
        </div>
        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-success btn-lg btn-block btn-huge">Février</a>
        </div>
        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-success btn-lg btn-block btn-huge">Mars</a>
        </div>
    </div>      

    <div class="row col-sm-offset-2 ">
        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-success btn-lg btn-block btn-huge">Avril</a>
        </div>
        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-success btn-lg btn-block btn-huge">Mai</a>
        </div>
        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-success btn-lg btn-block btn-huge">Juin</a>
        </div>

    </div>  

    <div class="row col-sm-offset-2 ">
        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-success btn-lg btn-block btn-huge">Juillet</a>
        </div>
        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-success btn-lg btn-block btn-huge">Août</a>
        </div>
        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-success btn-lg btn-block btn-huge">September</a>
        </div>
    </div>
  

    <div class="row col-sm-offset-2 ">
        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-success btn-lg btn-block btn-huge">October</a>
        </div>

        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-danger btn-lg btn-block btn-huge">November</a>
        </div>
        <div class="col-md-3">
            <a  data-toggle="modal" data-target="#mymod" class="btn btn-danger btn-lg btn-block btn-huge">Décember</a>
        </div>

    </div>

<div class="modal fade in" id="mymod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <br>
          
          <div class="form-group ">
                    <label for="inputState">Type :</label>
                    <select id="inputState" name="service" class="form-control">
                      <option>Individual</option>
                      <option>Groupe</option>
                    </select>
                    <br>
                    <button type="submit"  class="btn btn-info btn-lg"> Générer </button>
        </div>
          
        </div>
      </div>
      </div>
    
    
    <br>
</div>
 
@endsection

