<?php

namespace App\Models;

use App\Models\Admin\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'slug',
        'description',
        'featured_image',
        'image',
        'scheme_id',
        'service_id'
    ];
    public function getService()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function getScheme()
    {
        return $this->belongsTo(Scheme::class, 'scheme_id');
    }
}
