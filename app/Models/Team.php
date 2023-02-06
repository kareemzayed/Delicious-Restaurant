<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'col_id',
        'col_email',
        'facebook',
        'instegram',
        'linkedin',
        'photo',
    ];
}
