<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    //

    protected $table = 'kegiatan';

    protected $fillable =
        [
            "kegNamaAcara",
            "kegWaktu",
            "kegTempat",
            "kegPengisi",
            "kegKeterangan",
            "kegFoto",
            "status",
            "created_at",
            "updated_at"
        ];
}
