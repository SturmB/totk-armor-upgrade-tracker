<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Requirement extends Pivot
{
    use HasFactory;

    /**
     * The table name for requirements.
     *
     * @var string
     */
    protected $table = 'armor_resource';

    protected $fillable = [
        "armor_id",
        "resource_id",
        "tier",
        "quantity_needed",
        "created_at",
        "updated_at",
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Gets the armor that is associated with this requirement.
     *
     * @return BelongsTo
     */
    public function armor(): BelongsTo
    {
        return $this->belongsTo(Armor::class);
    }

    /**
     * Gets the resource that is associated with this requirement.
     *
     * @return BelongsTo
     */
    public function resource(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }
}
