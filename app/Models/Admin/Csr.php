<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csr extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description'
    ];
}
