<?php


namespace App\Services;

use App\Enums\ValidationRules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ValidationService
{
    /**
     * Validate data or redirect to add page
     *
     * @param string $rule
     * @param array $data
     * @param string $redirectRoute
     * @return array
     * @throws ValidationException
     */
    public static function validate(string $rule, array $data, string $redirectRoute): array
    {
        $validator = Validator::make($data, ValidationRules::get($rule));

        if($validator->fails()) {
            redirect()->to($redirectRoute)->withErrors($validator);
        }

        return $validator->validated();
    }
}
