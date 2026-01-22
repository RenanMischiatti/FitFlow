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

        // Goal & profile
        'goal',
        'fitness_level',
        'gender',

        // Physical data
        'age',
        'height',
        'weight',

        // Training routine
        'training_frequency',
        'training_time',
        'target_deadline',

        // Physical limitations
        'has_physical_limitation',
        'physical_limitations',

        // Muscle focus
        'muscle_groups',

        // Diet
        'diet_type',

        // Allergies
        'has_allergies',
        'allergies',

        // Eating behavior
        'appetite_level',

        // Notes
        'notes',

        // Order
        'status',
        'price',
    ];

    /**
     * Attribute casting.
     */
    protected $casts = [
        'has_physical_limitation' => 'boolean',
        'has_allergies' => 'boolean',

        'physical_limitations' => 'array',
        'muscle_groups' => 'array',

        'age' => 'integer',
        'height' => 'integer',
        'weight' => 'integer',

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
}
