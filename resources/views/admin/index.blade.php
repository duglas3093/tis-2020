@extends('layouts.admin')

@section('content')
<!-- Authentication Links  Colocarlo en el layout de admin-->
<!-- @if (Auth::guest())
<li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Iniciar Sesión</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Registrarse</a></li>
@else
    <li class="dropdown nav-item">
        <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
        </ul>
    </li>
@endif -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection