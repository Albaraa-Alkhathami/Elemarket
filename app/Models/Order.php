<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'buyerId' => 'integer',
            'sellerId' => 'integer',
            'totalAmount' => 'decimal:2',
            'createdAt' => 'datetime',
            'approvedAt' => 'datetime',
            'buyer_id' => 'integer',
            'seller_id' => 'integer',
        ];
    }

    public function buyer(): BelongsTo
    {
        return $this->belongsTo(Buyer::class);
    }

    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }

    public function elements(): BelongsToMany
    {
        return $this->belongsToMany(Element::class);
    }

    public function logistics(): HasMany
    {
        return $this->hasMany(Logistics::class);
    }
}
