<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MailSender implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public string $mail
    ) {}


    /**
     * Execute the job.
     */
    public function handle(): void
    {

        Mail::send(['text' => 'mail'], ['name', 'test mail'], function ($message) {
            $message->from('mailSender@laravel.com', 'Laravel');
            $message->to('artitur05@gmail.com')->cc('mailSender@laravel.com')->subject('Test mail');
        });
    }
}
