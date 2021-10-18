<?php

namespace App\Enums;

/**
 * Class ValidationRules
 * @package App\Enums
 */
class ValidationRules
{
    /**
     * Get specific rules
     *
     * @param string $rule
     * @return string[]|null
     */
    public static function get(string $rule)
    {
        return self::$rules[$rule];
    }

    /**
     * Rules array
     *
     * @var string[][]
     */
    private static $rules = [
        'surgeon_create' => [
            'code'          => 'required|unique:surgeons|numeric|min:100000|max:999999',
            'surname'       => 'required|string|min:3|max:255',
            'birth_date'    => 'date',
            'category'      => 'required|string|min:3|max:255',
            'gender'        => 'required|string|min:3|max:255',
            'home_phone'    => 'string|min:3|max:255',
        ],

        'tariff_create' => [
            'code'                      => 'required|unique:tariffs|numeric|min:100000|max:999999',
            'title'                     => 'required|string|min:3|max:255',
            'operation_price'           => 'required|numeric|min:5000|max:500000',
            'rehabilitation_day_price'  => 'required|numeric|min:500|max:10000',
        ],

        'patient_create' => [
            'surname'           => 'required|string|min:3|max:255',
            'birth_date'        => 'date',
            'category'          => 'required|string|min:3|max:255',
            'gender'            => 'required|string|min:3|max:255',
            'operation_date'    => 'required|date',
            'treatment_term'    => 'required|numeric|min:1|max:500',
            'surgeon_id'        => 'required|numeric|exists:App\Models\Surgeon,id',
            'tariff_id'         => 'required|numeric|exists:App\Models\Tariff,id',
        ],
    ];
}
