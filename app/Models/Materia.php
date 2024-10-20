<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materia extends Model
{
    protected $fillable = [
        'nombreMateria',  
        'nivel',  
        'nombreMediano',     
        'nombreCorto',
        'modalidad',
        'reticula_id',   
    ];
    use HasFactory;
    public function reticula():BelongsTo{
        return $this->belongsTo(Reticula::class);
      }
}
