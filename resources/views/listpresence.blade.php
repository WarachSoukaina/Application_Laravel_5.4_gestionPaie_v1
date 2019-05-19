@extends('layouts.app')

@section('content')

        <div class="col-md-12">
          <br>
            <div class="panel panel-default panel-info">
                <div class="panel-heading"><h3> La list des employés: </h3></div>

                <div class="panel-body">
                   

                  <table class="table">
                  <thead>
                    <tr>
                      <th>Id :</th>
                      <th>Nom et Prènom :</th>
                      <th>nombre de jours :</th>
                      <th>.....</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                      @if(isset($joursdef))

                      @for($i=1;$i<='10';$i++)
                      <tr class="info">
                        <td>{{$i}}</td>
                        <td>Employé {{$i}}</td>
                        <td> 
                        <input type="text" name="joursdef" value="{{$joursdef}}"> 
                        </td>
                        <td>....</td>
                        <td>
                      </tr>
                    
                    @endfor
                    @endif
                  </tbody>
                </table>

                </div>
            </div>
        </div>
 
@endsection
