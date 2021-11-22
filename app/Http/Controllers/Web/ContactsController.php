<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use function mail;

class ContactsController extends Controller
{
    public function getContactsPage()
    {
        return view('pages.user-side.contacts-page');
    }

    public function getEmailUsPage()
    {
        return view('pages.user-side.email-us-page');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function createMail(Request $request): RedirectResponse
    {
        $data = [
            'from'              => 'From: ' . $request->input('user-email'),
            'to'                => $request->input('addressee-email'),
            'subject'           => $request->input('subject'),
            'message'           => $request->input('message'),
        ];

        try {
            if (mail($data['to'], $data['subject'], $data['message'], $data['from']))
                return Redirect::back()->with('success', 'The operation ended successfully');
            else
                return Redirect::back()->with('error', 'The operation ended in failure');
        }
        catch (Exception $e) {
            return Redirect::back()->with('error', $e->getMessage());
        }
    }

}
