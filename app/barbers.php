<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class barbers extends Model
{
    protected $table='barbers';

    protected $fillable =
        [
            'shop_name',
            'Barber_Name',
            'address',
            'file',
            'description',
            'lat',
            'lng'
        ];
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public $timestamps = true;

}
