<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasPen extends Model
{
    use HasFactory;
    protected $table='kelas_pens';
    protected $fillable=['id_kelasPen','kelas_pendidikan'];
}
