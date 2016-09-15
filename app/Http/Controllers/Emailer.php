<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use App\Http\Requests\EmailRequest;
use App\Http\Controllers\Controller;
use Mail;


class Emailer extends Controller
{
    public function sendEmail(EmailRequest $request)
    {
    	$system = "NLPT Website";
    	Mail::send('emails.Inquiry', ['data' => $request], function ($m) use ($system) {
            $m->from('nlptWebmaster@gmail.com', $system);

            $m->to('info@mynlpt.com', 'Inquiry')->subject('New NLPT Inquiry');
        }); 

        return (new Response("Success!",201));
    }
}
