<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRequest extends Model
{
    protected $fillable = ['contact_name', 'mobile', 'email', 'book_name', 'pickup_date']; 
}
