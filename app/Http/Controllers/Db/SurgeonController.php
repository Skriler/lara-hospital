<?php

namespace App\Http\Controllers\Db;

use App\Models\Surgeon;
use App\Http\Controllers\Controller;
use App\Services\ValidationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class SurgeonController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $data = [
            'code'          => $request->input('code'),
            'surname'       => $request->input('surname'),
            'birth_date'    => $request->input('birth-date'),
            'category'      => $request->input('category'),
            'gender'        => $request->input('gender'),
            'home_phone'    => $request->input('home-phone'),
        ];

        $validatedData = ValidationService::validate('surgeon_create', $data, 'control-panel.surgeon.add');

        Surgeon::create($validatedData);
        return Redirect::back()->with('success', 'Added successfully');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        $surgeon = Surgeon::where('surname', $request->input('target-title'))->first();

        if ($surgeon->patients()->exists())
            return Redirect::back()->with('error', 'Dependent patients exists');

        $surgeon->delete();

        return Redirect::back()->with('success', 'Deleted successfully');
    }
}
