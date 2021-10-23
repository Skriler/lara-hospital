<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Surgeon;
use App\Models\Tariff;

class ControlPanelController extends Controller
{
    public function getAddSurgeonPage()
    {
        return view('pages.control-panel.surgeon-add-form');
    }

    public function getDeleteSurgeonPage()
    {
        $surgeons = Surgeon::all();

        return view('pages.control-panel.delete-form', [
            'title'    => 'Surgeon',
            'data'      => $surgeons,
        ]);
    }

    public function getAddTariffPage()
    {
        return view('pages.control-panel.tariff-add-form');
    }

    public function getDeleteTariffPage()
    {
        $tariffs = Tariff::all();

        return view('pages.control-panel.delete-form', [
            'title' => 'Tariff',
            'data' => $tariffs,
        ]);
    }

    public function getAddPatientPage()
    {
        $surgeons = Surgeon::all();
        $tariffs = Tariff::all();

        return view('pages.control-panel.patient-add-form', [
            'surgeons'  => $surgeons,
            'tariffs' => $tariffs,
        ]);
    }

    public function getDeletePatientPage()
    {
        $patients = Patient::all();

        return view('pages.control-panel.delete-form', [
            'title' => 'Patient',
            'data'  => $patients,
        ]);
    }
}
