<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

        public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class);
    }

}