<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MakeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fogger:make:user {email} {password?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $password = $this->argument('password') ?? Str::random(16);
        User::create([
            'name'=> 'User name',
            'email'=> $this->argument('email'),
            'password'=> Hash::make($password),
        ]);
        $this->info("Email: ".$this->argument('email').PHP_EOL."Password: $password");
    }
}
