<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmailToUsersJob;
use App\Models\Email;
use App\Models\Email_User;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = Email::all();
        return view('admin.email.index', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.email.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $start = Carbon::now();
        $email = new Email();
        $email->subject = $request->subject;
        $email->text = $request->text;
        $email->replyTo = $request->replyTo;
        $email->save();
        foreach ($request->users as $userId) {
            $emailUser = new Email_User();
            $emailUser->user_id = $userId;
            $emailUser->email_id = $email->id;
            $emailUser->save();
        }

        //sending email
        foreach ($request->users as $userId) {
            $user = User::find($userId);
            $data = ['subject' => $request->subject, 'text' => $request->text,
                'replyTo' => $request->replyTo, 'user' => $user, 'email' => $user->email,
                'email_id' => $email->id];
//            SendEmailToUsersJob::dispatch($data)->delay(now()->addMinutes(3));
            $job = new SendEmailToUsersJob($data);
            $job->delay($start->addSeconds(30));
            dispatch($job);
        }
        //end sending email

        \Illuminate\Support\Facades\Session::flash('email-send', 'عملیات با موفقیت انجام شد');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
