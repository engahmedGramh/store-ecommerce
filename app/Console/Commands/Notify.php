<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email notify for all user every day';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$user= User::select('email')->get();
	    //ايجيب البيانات ع شكل كولكشن في طريقة اخرى تجيبة لي ع شكل مصفوفة
	    $emails=User::pluck('email')->toArray();
        $data=['titele'=>'programming','body'=>'php'];
	    foreach($emails as $email){
		//how to send emails in laravel
        Mail::To($email)->send(new NotifyEmail($data));
	    }
    }
}
