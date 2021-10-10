<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Surgeon
 *
 * @property int $id
 * @property int $code
 * @property string $surname
 * @property string|null $birth_date
 * @property string $category
 * @property string $gender
 * @property string|null $home_phone
 * @mixin Eloquent
 */
class Surgeon extends Model
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
        'surname',
        'birth_date',
        'category',
        'gender',
        'home_phone',
    ];

    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }
}
