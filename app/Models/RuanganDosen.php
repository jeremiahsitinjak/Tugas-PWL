<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuanganDosen extends Model
{
    use HasFactory;
    
    protected $table = 'ruangan_dosen';
    protected $primaryKey = 'id_ruangan';

    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}
