<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Tariff
 *
 * @property int $id
 * @property int $code
 * @property string $title
 * @property int $operation_price
 * @property int $rehabilitation_day_price
 * @mixin Eloquent
 */
class Tariff extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'code',
        'title',
        'operation_price',
        'rehabilitation_day_price',
    ];

    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }
}
