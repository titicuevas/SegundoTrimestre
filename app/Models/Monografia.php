<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monografia extends Model
{

    protected $fillable = [
        'titulo',
        'anyo',
    ];

    use HasFactory;

    public function articulos(){
        return $this->belongsToMany(Articulos::class);
    }

}
