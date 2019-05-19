@extends('layouts.app')

@section('content')

        <div class="col-md-12">
            <div class="panel panel-default panel-info">

                <div class="panel-heading"><h3>Les employés <a href="{{ url('/creer') }}" class="add-project pull-right" > Ajouter un employé</a> </h3> </div>

                <div class="panel-body">
                    
  <table class="table" style="border: .6px solid silver">
      <thead >
        <tr>
          <th># Id </th>
          <th>Employé :</th>
          <th>Informations :</th>
          <th>Contrat:</th>
        </tr>
      </thead>
      <tbody>
        @if(isset($employes))
        @foreach($employes as $employe)
        <tr class="success">
          <td>{{$employe->id}}</td>
          <td> {{$employe->nom}} {{$employe->prenom}} </td>
          <td><a href="/details/{{$employe->id}}">Plus d'infos ...</a></td>
          <td> Contrat.pdf</td>

        </tr>
        @endforeach
        @endif
      </tbody>
    </table>


                </div>
            </div>
        </div>
 
@endsection
