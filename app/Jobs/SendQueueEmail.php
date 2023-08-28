<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use Mail;

class SendQueueEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;
    public $timeout = 7200; // 2 hours

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $users = $this->data['users'];

        foreach ($users as $key => $user) {
            $userData = $user;
            $user = json_decode(json_encode($user), true);
            $user['subject'] = $this->data['email']['subject'];
            $user['htmlContent'] = $this->replacePlaceHolders($userData, $this->data['email']['message']);
            \Mail::send('mail', $user, function($message) use($user){
                $message->to($user['email'])
                    ->subject($user['subject']);
            });
        }
    }

    /**
     * replace placeholder with user value
     * @param $user
     * @param $message
     * @return string
     */
    private function replacePlaceHolders($user, $message): string
    {
        return preg_replace_callback(
            '/\{([A-Z_]+)\}/',
            function ($matches) use ($user) {
                $property = $matches[1];
                return $user->{strtoupper($property)} ?? $matches[0];
            },
            $message
        );
    }
}