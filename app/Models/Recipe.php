<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Recipe {

    public static function all() {

        $files = File::files(resource_path("recipes/"));

        return array_map(fn($file) => $file->getContents(), $files); 
    }

    public static function find($slug) {

        if (!file_exists($path = resource_path("recipes/recipe-{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("recipes.{$slug}", 3600, fn() => file_get_contents($path));
    }
}
