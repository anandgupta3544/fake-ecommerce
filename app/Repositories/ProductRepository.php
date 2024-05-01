<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository {
    public function getAllProducts(array $filters): Collection
    {
        return Product::active()->with(['category'])->get();
    }
}