<?php

namespace App\Models;

class Recipe {

    public static function find($slug) {

        return "here is a recipe with id=" . $slug;

    }
}
