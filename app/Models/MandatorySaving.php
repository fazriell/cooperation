<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MandatorySaving extends Model
{
    use HasFactory;
    protected $fillalbe = ['date', 'customer_id', 'amount'];

    /*
        * 1 Nasabah / customer punya banyak simpanan / mandatory savings(hasmany)
        * 1 Simpanan kepunyaan 1 nasabah(belongsto)
    */

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
