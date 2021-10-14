<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupang extends Model
{
    protected $fillable =['jenis_ikan', 'harga', 'penjual', 'foto_ikan'];
}
