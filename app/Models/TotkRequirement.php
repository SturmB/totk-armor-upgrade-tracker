<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TotkRequirement extends Pivot
{
    use HasFactory;

    /**
     * The table name for requirements.
     *
     * @var string
     */
    protected $table = 'totk_armor_resource';

    protected $fillable = [
        "totk_armor_id",
        "totk_resource_id",
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
        return $this->belongsTo(TotkArmor::class, "totk_armor_id");
    }

    /**
     * Gets the resource that is associated with this requirement.
     *
     * @return BelongsTo
     */
    public function resource(): BelongsTo
    {
        return $this->belongsTo(TotkResource::class, "totk_resource_id");
    }
}
