<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Surgeon;
use App\Models\Tariff;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function getMainPage()
    {
        return view('pages.user-side.main-page');
    }

    public function getContactsPage()
    {
        return view('pages.user-side.contacts-page');
    }

    public function getSurgeonsListPage()
    {
        $surgeon_fields = ['id', 'surname', 'code', 'birth_date', 'category', 'gender', 'home_phone'];
        $surgeons = Surgeon::paginate(10);

        return view('pages.user-side.list-page', [
            'title'        => 'Surgeons',
            'data_fields'   => $surgeon_fields,
            'data'          => $surgeons,
        ]);
    }

    public function getTariffsListPage()
    {
        $tariff_fields = ['id', 'title', 'code', 'operation_price', 'rehabilitation_day_price'];
        $tariffs = Tariff::paginate(10);

        return view('pages.user-side.list-page', [
            'title'        => 'Tariffs',
            'data_fields'   => $tariff_fields,
            'data'          => $tariffs,
        ]);

    }

    public function getPatientsListPage()
    {
        $patient_fields = ['id', 'surname', 'birth_date', 'category', 'gender', 'operation_date', 'treatment_term'];
        $patients = Patient::paginate(10);

        return view('pages.user-side.list-page', [
            'title'        => 'Patients',
            'data_fields'   => $patient_fields,
            'data'          => $patients,
        ]);
    }
}
