<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $table='customers';
    protected $fillable =
        [
            'lat',
            'message',
            'lng'
        ];

        public function barbers()
    {
        return $this->hasMany(User::class, 'barber_id');
    }
    public function User()
    {
        return $this->hasMany(User::class, 'id');
    }
}
