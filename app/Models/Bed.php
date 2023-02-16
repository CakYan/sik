<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    
    protected $guarded = ['id'];
    
    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }
    
    public function ruangan(){
        return $this->belongsTo(Ruangan::class, 'id_ruangan');
    }
    use HasFactory;
}
