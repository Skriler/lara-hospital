<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Patient
 *
 * @property int $id
 * @property string $surname
 * @property string|null $birth_date
 * @property string $category
 * @property string $gender
 * @property string $operation_date
 * @property int $treatment_term
 * @property int $surgeon_id
 * @property int $tariff_id
 * @mixin Eloquent
 */
class Patient extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'surname',
        'birth_date',
        'category',
        'gender',
        '$operation_date',
        'treatment_term',
        'surgeon_id',
        'tariff_id',
    ];

    public function surgeon(): BelongsTo
    {
        return $this->belongsTo(Surgeon::class);
    }

    public function tariff(): HasOne
    {
        return $this->hasOne(Tariff::class);
    }
}
