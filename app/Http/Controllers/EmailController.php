<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Support\Facades\Mail;*/
use App\Jobs\SendEmailJob;
use Carbon\Carbon;

class EmailController extends Controller
{
    public function sendEmail()
    {
       // Mail::to('mail@appdividend.com')->send(new SendMailable());

        //dispatch(new SendEmailJob());

		$emailJob = (new SendEmailJob())->delay(Carbon::now()->addSeconds(5));
		dispatch($emailJob);
        echo 'email sent';
    }
}