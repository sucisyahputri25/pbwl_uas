<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointment';

    protected $primaryKey = 'id';

    protected $guarded = [];

    protected $fillable = [
        'cus_id', 
        'ser_id', 
        'tanggal',
    ];

    public function customers(): HasOne
    {
        return $this->hasOne(Customers::class, 'id', 'cus_id');
    }

    public function servis(): HasOne
    {
        return $this->hasOne(Servis::class, 'id', 'ser_id');
    }
}
