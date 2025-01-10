<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    /** @use HasFactory<\Database\Factories\BooksFactory> */
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'cim',
        'szerzo',
    ];

    public $timestamps = false;

}
