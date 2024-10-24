<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Depto extends Model
{
    /** @use HasFactory<\Database\Factories\DeptoFactory> */
    use HasFactory;
    public function Carreras(): HasMany{
        return $this->hasMany(Carrera::class);
    } 

     
     protected $fillable = [
         
         'nombreDepto',
         'nombreMediano',
         'nombreCorto',
     ];
 }


 

   

   
   
   

   
  