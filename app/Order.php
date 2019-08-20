<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order';
    protected $fillable = [
        'id_jadwal', 'id_pengguna', 'jumlah_seat','id_seat','status','alamatjem','alamatant','tglorder','total_bayar', 'bukti'
    ];
}
