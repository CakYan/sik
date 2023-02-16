<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $guarded = ['id'];
    protected $table = 'pasiens';
    
    public function bed(){
        return $this->belongsTo(Bed::class, 'id_bed');
    }
    
    public function visite(){
        return $this->hasMany(Visite::class, 'id');
    }
    use HasFactory;
}