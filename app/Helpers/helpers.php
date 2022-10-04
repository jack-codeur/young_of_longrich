<?php

use App\Models\TypeArticle;

use function PHPSTORM_META\type;

function userFullName(){
    return auth()->user()->nom;
}
