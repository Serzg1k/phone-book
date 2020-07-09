<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhoneBook extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'surname',
    ];

    public function numbers()
    {
        return $this->hasMany(Number::class);
    }
}
