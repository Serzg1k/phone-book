<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{

    protected $fillable = [
        'number',
        'phone_book_id',
    ];

    public function phoneBook()
    {
        return $this->belongsTo(PhoneBook::class);
    }
}
