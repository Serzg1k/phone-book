<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneBook extends Model
{

    protected $fillable = [
        'name',
        'surname',
    ];

    public function numbers()
    {
        return $this->hasMany(Number::class);
    }
}
