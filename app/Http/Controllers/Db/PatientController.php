<?php

namespace App\Http\Controllers\Db;

use App\Models\Patient;
use App\Http\Controllers\Controller;
use App\Models\Surgeon;
use App\Models\Tariff;
use App\Services\ValidationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class PatientController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $data = [
            'surname'           => $request->input('surname'),
            'birth_date'        => $request->input('birth-date'),
            'category'          => $request->input('category'),
            'gender'            => $request->input('gender'),
            'operation_date'    => $request->input('operation-date'),
            'treatment_term'    => $request->input('treatment-term'),
            'surgeon_id'        => Surgeon::where('surname', $request->input('surgeon'))->first()->id,
            'tariff_id'         => Tariff::where('title', $request->input('tariff'))->first()->id,
        ];

        $validatedData = ValidationService::validate('patient_create', $data, 'control-panel.patient.add');

        Patient::create($validatedData);
        return Redirect::back()->with('success', 'Added successfully');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        $patient = Patient::where('surname', $request->input('target-title'))->first();

        $patient->delete();

        return Redirect::back()->with('success', 'Deleted successfully');
    }
}
