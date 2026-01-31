<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderElement extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'orderId' => 'integer',
            'elementId' => 'integer',
            'quantity' => 'integer',
            'pricePerUnitAtPurchase' => 'decimal:2',
            'subtotal' => 'decimal:2',
            'order_id' => 'integer',
            'element_id' => 'integer',
        ];
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function element(): BelongsTo
    {
        return $this->belongsTo(Element::class);
    }
}
