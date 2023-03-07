<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beli extends Model
{
    use HasFactory;

    public function jenisTiket()
{
    return $this->belongsTo(Beli::class, 'id_jenis');
}


}
