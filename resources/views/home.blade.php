@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center">Bienvenue {{Auth::user()->firstname}}</div>
                    <div class="d-flex flex-row justify-content-around">
                        <button type="button" class="btn btn-dark"><a href="{{route('infos')}}"> Voir vos informations personnelles</a></button>
                        <button type="button" class="btn btn-dark"><a href="{{route('users')}}">Voir la liste des utilisateurs</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection

