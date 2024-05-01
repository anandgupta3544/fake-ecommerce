<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = true;

    public function scopeActive($query)
    {
        return $query->where($this->table.'.status', self::STATUS_ACTIVE);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
