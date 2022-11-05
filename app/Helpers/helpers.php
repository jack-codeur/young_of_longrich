<?php

use Illuminate\Support\Str;


function userFullName(){
    return auth()->user()->nom." ". auth()->user()->prenom;
}
//set menu open
function menuClassOpen($route, $class){
    $routeActuel = request()->route()->getName();

    if (contains($routeActuel, $route)) {
        return $class;
    }
    return "";
}
//set menu active
function menuClassActive($route){
    $routeActuel = request()->route()->getName();

    if ($routeActuel === $route) {
        return 'active';
    }
    return "";
}

function contains($container, $contenu){
    return Str::contains($container, $contenu);
}
