<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Manga extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nomDessinateur',
        'nomScenariste',
        'genre',
        'prix',
        'titre',
        'couverture',
    ];
    public function getAll() {
        $mangas = DB::table('mangas')->select('id', 'titre', 'prix', 'genre', 'nomDessinateur', 'nomScenariste')
        ->get();
        return $mangas;
    }
  

}
