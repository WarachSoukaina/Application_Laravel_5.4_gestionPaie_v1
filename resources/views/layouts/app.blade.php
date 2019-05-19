<!DOCTYPE html>
<html lang="fr">
    <head>
        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title> Gestion de Paie </title>
    <link rel="icon" href="http://icons.iconarchive.com/icons/emey87/social-button/256/g-icon.png" sizes="110x110">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<script>
    
    $(document).ready(function(){
$('[data-toggle="offcanvas"]').click(function(){
   $("#navigation").toggleClass("hidden-xs");
   });
});

</script>

<body class="home" >

    @if (Auth::guest())



    @else

    <div class="container-fluid display-table " style="background-color:#85a3e0;">
        <div class="row display-table-row">

            
            <div class="col-ms-2 hidden-xs display-table-cell v-align box" id="navigation">

                <div class="logo">
                   <h3> 
                        <a>-- LOGO -- <br>de<br>-- Société --</a>
                    </h3>
                </div>
                


                <div class="navi">
                    <ul>
                        <li class="active"><a href="{{ url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Tableau de Bord</span></a></li>
                        <li><a href="{{ url('/employes')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Personnel</span></a></li> 

                        <li><a href="{{ url('/contrat')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Contrats </span></a></li>
                        
                        <li><a href="{{ url('/presence')}}"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Présence </span></a></li>

                        <li><a href="{{ url('/bulletinpaie')}}"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Bulletin de paie </span></a></li>

                        <li><a href="{{ url('/etat')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Etat Comptable </span></a></li>

                        <li><a href="{{ url('/parametrage')}}"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Paramétrage  </span></a></li>

                        <li><a href="{{url('/damancom')}}" ><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">DAMANCOM</span></a></li>

                        <li><a href="{{ url('/historique')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Historique</span></a></li>

                        
                    </ul>
                </div>
                 @endif
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top ">
                        @if (Auth::guest())
                           <li class="hidden-xs"> &nbsp;&nbsp;&nbsp;<a href="#" ></a></li>
                        @else
                                                            

                                        <!-- Authentication Links -->
                        
                            <li class="dropdown pull-right" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"> </i> 
                                    &nbsp; {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>{{ Auth::user()->email }}</li>
                                    <li>
                                        <a href="{{ route('logout') }}" class="view btn-sm active"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <span class="glyphicon glyphicon-off"> </span>  Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                                        
                                </ul>
                            </div>
                        </div>
                    </header>                  


                
                </div>

                @if(Auth::guest())

                <div class="logo pull-left" style="margin-left: 2%; background-color: cyan;">
                    <h3> 
                        <a>-- LOGO -- <br>de<br>-- Société --</a>
                    </h3>
                </div>

                @endif
                <br>
                @yield('content')

            </div>
        </div>

    </div>
<hr>
    <footer>

       <center>XellenTech Product &copy;2017</center> 
       <br>
    </footer>
    

</body>

    
</html>
