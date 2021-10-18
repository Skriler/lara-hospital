<?php

namespace App\Http\Controllers\Db;

use App\Models\Tariff;
use App\Http\Controllers\Controller;
use App\Services\ValidationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class TariffController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $data = [
            'code'                      => $request->input('code'),
            'title'                     => $request->input('title'),
            'operation_price'           => $request->input('operation-price'),
            'rehabilitation_day_price'  => $request->input('rehabilitation-day-price'),
        ];

        $validatedData = ValidationService::validate('tariff_create', $data, 'control-panel.tariff.add');

        Tariff::create($validatedData);
        return Redirect::back()->with('success', 'Added successfully');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        $tariff = Tariff::where('title', $request->input('target-title'))->first();

        if ($tariff->patients()->exists())
            return Redirect::back()->with('error', 'Dependent patients exists');

        $tariff->delete();

        return Redirect::back()->with('success', 'Deleted successfully');
    }
}
