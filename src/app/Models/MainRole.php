<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainRole extends Model
{
    use HasFactory;

    protected $table = 'main_roles';
    protected $fillable = [
        'name',
        'slug',
    ];
}
