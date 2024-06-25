<?php

namespace App\Models;

use App\Models\Admin\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'service_id',
        'order'
    ];
    public function getService()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
