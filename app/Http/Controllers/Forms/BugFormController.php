<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Http\Requests\BugFormSubmitRequest;
use App\Notifications\BugReportNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Inertia\Inertia;

class BugFormController extends Controller
{
    /**
     * Shows the form to submit a bug
     */
    public function show()
    {
        return Inertia::render('Forms/BugForm', [

        ]);
    }

    public function submit(BugFormSubmitRequest $request)
    {
//        Notification::route('mail', 'mail@mail.de')
//        ->notify(new BugReportNotification($request->name, $request->message));

        session()->flash('success', 'Der Bug-Report wurde verschickt. Vielen Dank!');

        return Inertia::render('BugForm');
    }
}
