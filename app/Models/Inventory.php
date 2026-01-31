<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'sellerId' => 'integer',
            'elementId' => 'integer',
            'quantityAvailable' => 'integer',
            'reservedQuantity' => 'integer',
            'seller_id' => 'integer',
            'element_id' => 'integer',
        ];
    }

    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }

    public function element(): BelongsTo
    {
        return $this->belongsTo(Element::class);
    }
}
