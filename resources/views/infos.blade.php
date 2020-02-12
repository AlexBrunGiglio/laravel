@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-2">
                <div class="card-header"><h4>Informations Utilisateurs</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>Pénom : {{Auth::user()->firstname}}</div>
                    <div>Nom : {{Auth::user()->name}}</div>
                    <div>Adresse Email : {{Auth::user()->email}}</div>
                    <div>Biographie : {{Auth::user()->bio}}</div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Gestion des compétences</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-2">
                    <h5>Vos compétences actuelles</h5>

                    </div>

                    <h6>Ajouter une compétence</h6>
                    <div class="form-group d-flex flex-column bd-highlight mb-2">
                        <select class="form-control bd-highlight">
                        <option></option>
                        </select>
                        <button type="button" class="btn bd-highlight ml-auto mt-3 mb-3 btn-danger">Valider</button>
                    </div>

                    <h6>Modifier une compétence</h6>
                    <div class="form-group d-flex flex-column bd-highlight mb-2">
                    <select class="form-control bd-highlight">
                        <option></option>
                        </select>
                        <button type="button" class="btn bd-highlight ml-auto mt-3 mb-3 btn-danger">Valider</button>
                    </div>

                    <h6>Supprimer une compétence</h6>
                    <div class="form-group d-flex flex-column bd-highlight mb-2">
                    <select class="form-control bd-highlight">
                        <option></option>
                        </select>
                        <button type="button" class="btn bd-highlight ml-auto mt-3 mb-3 btn-danger">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
