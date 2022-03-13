<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserKey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fogger:make:key {email} {keyName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create key for user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::where('email', $this->argument('email'))->first();
        if(!$user){
            $this->error('User not found');
        }
        $key = $user->createToken($this->argument('keyName'));
        $this->info($key->plainTextToken);
    }
}
