<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'phone', 'address'];

    /*
        * 1 Nasabah / customer punya banyak simpanan / mandatory savings(hasmany)
        * 1 Simpanan kepunyaan 1 nasabah(belongsto)
    */

    public function mandatorySavings() {
        return $this->hasMany(MandatorySaving::class, 'customer_id');
    }
}
