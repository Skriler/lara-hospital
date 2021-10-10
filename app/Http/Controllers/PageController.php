<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Surgeon;
use App\Models\Tariff;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function addSurgeonPage()
    {
        return view('pages.control-panel.surgeon.add-form');
    }

    public function deleteSurgeonPage()
    {
        $surgeons = Surgeon::all();

        return view('pages.control-panel.surgeon.delete-form', [
            'surgeons'  => $surgeons,
        ]);
    }

    public function addTariffPage()
    {
        return view('pages.control-panel.tariff.add-form');
    }

    public function deleteTariffPage()
    {
        $tariffs = Tariff::all();

        return view('pages.control-panel.tariff.delete-form', [
            'tariffs' => $tariffs,
        ]);
    }

    public function addPatientPage()
    {
        $surgeons = Surgeon::all();
        $tariffs = Tariff::all();

        return view('pages.control-panel.patient.add-form', [
            'surgeons'  => $surgeons,
            'tariffs' => $tariffs,
        ]);
    }

    public function deletePatientPage()
    {
        $patients = Patient::all();

        return view('pages.control-panel.patient.delete-form', [
            'patients'  => $patients,
        ]);
    }
}
