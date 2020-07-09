<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Number extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'number',
        'phone_book_id',
    ];

    public function phoneBook()
    {
        return $this->belongsTo(PhoneBook::class);
    }
}
