<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'image',
        'stock',
        'price',
        'offer',
        'category_id',
        'provider_id'
    ];

    public function getCategory()
    {
        return $this->belongsTo(Category::class);
    }

    public function getProvider()
    {
        return $this->belongsTo(Provider::class);
    }

}
