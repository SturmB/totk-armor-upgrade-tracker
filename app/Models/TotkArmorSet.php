<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TotkArmorSet extends Model
{
    use HasFactory;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = "integer";

    /**
     * @var array
     */
    protected $fillable = ["name", "image", "created_at", "updated_at"];

    /**
     * @return HasMany
     */
    public function armors(): HasMany
    {
        return $this->hasMany(TotkArmor::class, "totk_armor_set_id");
    }
}
