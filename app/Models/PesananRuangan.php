<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananRuangan extends Model
{
    use HasFactory;

    public function akun() {
        return $this->belongsTo(Akun::class, 'id_akun');
    }
}
