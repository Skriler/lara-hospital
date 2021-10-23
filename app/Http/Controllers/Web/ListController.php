<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Surgeon;
use App\Models\Tariff;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function getTableListPage(string $table)
    {
        $parameters = [
            'order_by_field' => 'id',
        ];

        $data = self::getTableData($table, $parameters);

        return view('pages.user-side.list-page', [
            'title'         => $table,
            'data_fields'   => self::getTableFieldsName($table),
            'data'          => $data,
            'params'        => $parameters,
        ]);
    }

    public function getSortedTableListPage(string $table, Request $request)
    {
        $parameters = [
            'order_by_field' => lcfirst($request->input('order-by-field')),
        ];

        $parameters += self::getParametersFromRequest($table, $request);
        $data = self::getTableData($table, $parameters);

        return view('pages.user-side.list-page', [
            'title'         => $table,
            'data_fields'   => self::getTableFieldsName($table),
            'data'          => $data,
            'params'        => $parameters,
        ]);
    }

    private function getParametersFromRequest(string $table, Request $request): array
    {
        $parameters = [];

        switch ($table)
        {
            case 'surgeons':
                $parameters += [
                    'min_code'              => $request->input('min-code', ''),
                    'max_code'              => $request->input('max-code', ''),
                    'min_birth_date'        => $request->input('min-birth-date', ''),
                    'max-birth-date'        => $request->input('max-birth-date', ''),
                    'gender'                => $request->input('gender', ''),
                ];
                break;
            case 'tariffs':
                $parameters += [
                    'min_code'              => $request->input('min-code', ''),
                    'max_code'              => $request->input('max-code', ''),
                    'min_operation_price'   => $request->input('min-operation-price', ''),
                    'max_operation_price'   => $request->input('max-operation-price', ''),
                    'min_rehab_day_price'   => $request->input('min-rehabilitation-day-price', ''),
                    'max_rehab_day_price'   => $request->input('max-rehabilitation-day-price', ''),
                ];
                break;
            case 'patients':
                $parameters += [
                    'surgeon'               => $request->input('surgeon', ''),
                    'tariff'                => $request->input('tariff', ''),
                    'min_birth_date'        => $request->input('min-birth-date', ''),
                    'max-birth-date'        => $request->input('max-birth-date', ''),
                    'min_treatment_term'    => $request->input('min-treatment-term', ''),
                    'max_treatment_term'    => $request->input('max-treatment-term', ''),
                ];
                break;
        }

        return $parameters;
    }

    private function getTableFieldsName(string $table): array
    {
        $dataFields = [
            'surgeons'  => ['id', 'surname', 'code', 'birth_date', 'category', 'gender', 'home_phone'],
            'tariffs'   => ['id', 'title', 'code', 'operation_price', 'rehabilitation_day_price'],
            'patients'  => ['id', 'surname', 'birth_date', 'category', 'gender', 'operation_date', 'treatment_term'],
        ];

        return $dataFields[$table];
    }

    private function getTableData(string $table, Array $params): LengthAwarePaginator
    {
        $data = Surgeon::paginate(10);

        switch ($table)
        {
            case 'surgeons':
                $data = self::getParameterizedSurgeonsData($params);
                break;
            case 'tariffs':
                $data = self::getParameterizedTariffsData($params);
                break;
            case 'patients':
                $data = self::getParameterizedPatientsData($params);
                break;
        }

        return $data;
    }

    private function getParameterizedSurgeonsData(Array $params): LengthAwarePaginator
    {
        $query = Surgeon::query();

        if (self::isFilled($params, 'min_birth_date')) {
            $query = $query->where('birth_date', '>=', $params['min_birth_date']);
        }

        if (self::isFilled($params, 'max_birth_date')) {
            $query = $query->where('birth_date', '<=', $params['max_birth_date']);
        }

        if (self::isFilled($params, 'min_code')) {
            $query = $query->where('code', '>=', $params['min_code']);
        }

        if (self::isFilled($params, 'max_code')) {
            $query = $query->where('code', '<=', $params['max_code']);
        }

        if (self::isFilled($params, 'gender')) {
            $query = $query->where('gender', $params['gender']);
        }

        return $query->orderBy($params['order_by_field'])->paginate(10);
    }

    private function getParameterizedTariffsData(Array $params): LengthAwarePaginator
    {
        $query = Tariff::query();

        if (self::isFilled($params, 'min_code')) {
            $query = $query->where('code', '>=', $params['min_code']);
        }

        if (self::isFilled($params, 'max_code')) {
            $query = $query->where('code', '<=', $params['max_code']);
        }

        if (self::isFilled($params, 'min_operation_price')) {
            $query = $query->where('operation_price', '>=', $params['min_operation_price']);
        }

        if (self::isFilled($params, 'max_operation_price')) {
            $query = $query->where('operation_price', '<=', $params['max_operation_price']);
        }

        if (self::isFilled($params, 'min_rehab_day_price')) {
            $query = $query->where('rehabilitation_day_price', '>=', $params['min_rehab_day_price']);
        }

        if (self::isFilled($params, 'max_rehab_day_price')) {
            $query = $query->where('rehabilitation_day_price', '<=', $params['max_rehab_day_price']);
        }

        return $query->orderBy($params['order_by_field'])->paginate(10);
    }

    private function getParameterizedPatientsData(Array $params): LengthAwarePaginator
    {
        $query = Patient::query();

        if (self::isFilled($params, 'surgeon')) {
            $surgeon_id = Surgeon::where('surname', $params['surgeon'])->first()->id;
            $query = $query->where('surgeon_id', $surgeon_id);
        }

        if (self::isFilled($params, 'tariff')) {
            $tariff_id = Tariff::where('title', $params['tariff'])->first()->id;
            $query = $query->where('tariff_id', $tariff_id);
        }

        if (self::isFilled($params, 'min_birth_date')) {
            $query = $query->where('birth_date', '>=', $params['min_birth_date']);
        }

        if (self::isFilled($params, 'max_birth_date')) {
            $query = $query->where('birth_date', '<=', $params['max_birth_date']);
        }

        if (self::isFilled($params, 'min_treatment_term')) {
            $query = $query->where('treatment_term', '>=', $params['min_treatment_term']);
        }

        if (self::isFilled($params, 'max_treatment_term')) {
            $query = $query->where('treatment_term', '<=', $params['max_treatment_term']);
        }

        return $query->orderBy($params['order_by_field'])->paginate(10);
    }

    private function isFilled(Array $arr, string $field): bool
    {
        return array_key_exists($field, $arr) && !empty($arr[$field]) && $arr[$field] != '';
    }
}
