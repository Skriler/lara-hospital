<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Surgeon;
use App\Models\Tariff;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function getMainPage()
    {
        return view('pages.user-side.main-page');
    }
}
