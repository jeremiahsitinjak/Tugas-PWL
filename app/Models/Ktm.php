<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktm extends Model
{
    use HasFactory;
    
    protected $table ='ktm';
    protected $primarKey = 'id_ktm';

    public function mahasiswa(){
        return $this-> belongsTo(Mahasiswa::class);
    }
}