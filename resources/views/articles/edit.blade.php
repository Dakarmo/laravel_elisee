    @extends('layouts.master')

    @section('title') Éditer l'article {{$article->title }}
    @endsection

    @section('content')
        @csrf
        <form action="/article/{article}/edit"  enctype= "multipart/form-data">
            @method('patch')
            @include('partials.article-form')
        </form>
    @endsection

    # Affectations des ressources de production
    ## Affectation
        - Afficher la liste des ressources non affectées
        - Fonctionnalité de selection multiple 
        - Boutton affectation qui renvoi un formulaire avec les champs pays, Campagne, Chef de plateau, superviseur et des boutons 
    ## Réaffectation 
        - Afficher la liste des ressources à reaffecter
        - Fonctionnalité de selection multiple 
        - Boutton réaffectation qui renvoi un formulaire avec les champs (pré-remplie avec ses informations actuels) pays, Campagne, Chef de plateau, superviseur et des boutons 
        - Réaffectation coach_qualité/superviseur il y aura les champs campagne et chef_plateau pré-rempli  
    ## Désaffectation 
    ## Fonctionnalité d'attribution du N+1
        

# Gestion de Planing
    -Fonctionnalité:
        -Créér le planning
        -Modifier le planning
        -Afficher le planning 
        -Valider le planning 
        -Publier le planning
    