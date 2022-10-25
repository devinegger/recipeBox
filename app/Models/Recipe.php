<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Recipe {

    public $id;

    public $title;

    public $excerpt;

    public $date;

    public $body;

    public function __construct($id, $title, $excerpt, $date, $body) {
        $this->id = $id;
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

    public static function all() {

        return cache()->rememberForever('recipes.all', function () {
            
            return collect(File::files(resource_path("recipes")))
            
            ->map(fn($file) => YamlFrontMatter::parseFile($file)) 
                
            ->map(fn($document) => new Recipe(
                $document->id,
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body()
            ))->sortByDesc('date');
        });
    }

    public static function find($id) {
 
        return static::all()->firstWhere('id', $id);
    }

    public static function findOrFail($id) {

        $recipe = static::find($id);

        if(!$recipe) {
            throw new ModelNotFoundException();
        }
 
        return $recipe;
    }
}
