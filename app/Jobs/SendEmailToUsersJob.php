<?php

namespace App\Jobs;

use App\Mail\SendMailToUser;
use App\Models\Email;
use App\Models\Email_User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailToUsersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;

    /**
     * Create a new job instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->data['email'])
            ->send(new SendMailToUser($this->data));
        $email_User = Email_User::where('user_id', $this->data['user_id'])->where('email_id', $this->data['email_id'])->first();
        $email_User->status = '1';
        $email_User->save();
    }
}
