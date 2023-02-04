<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    use HasFactory;
    protected $table='dusuns';
    protected $fillable=['id_dusun','dusun','desa_id','kecamatan_id'];
}
