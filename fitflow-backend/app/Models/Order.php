<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    /**
     * Mass assignable attributes.
     */
    protected $fillable = [
        'user_id',
        'data',

        // Order
        'status',
        'price',
    ];

    /**
     * Attribute casting.
     */
    protected $casts = [
        'price' => 'decimal:2',
    ];

    /**
     * Default attribute values.
     */
    protected $attributes = [
        'status' => self::STATUS_PENDING,
        'price' => 9.90,
    ];

    public const STATUS_PENDING = 'pending';
    public const STATUS_PAID = 'paid';
    public const STATUS_CANCELED = 'canceled';
    public const STATUS_COMPLETED = 'completed';

    public const DEFAULT_PRICE = 990;

    /**
     * Relationship: Order belongs to a User
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function markAsPaid(): self
    {
        $this->status = self::STATUS_PAID;
        $this->save();

        return $this;
    }

}
