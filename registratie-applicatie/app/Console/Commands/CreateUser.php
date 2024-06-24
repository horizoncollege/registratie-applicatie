<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user';

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
        $name = $this->ask('What is the name?');
        $email = $this->ask('What is the email address?');
        $password = $this->secret('What is the password?'); // Use secret for password input
        $company = $this->ask('What is the company name?');
        $place = $this->ask('What is the place?');
        $contactperson = $this->ask('Who is the contact person?');
        $function = $this->ask('What is the function?');
        $phone = $this->ask('What is the phone number?');
        $website = $this->ask('What is the website?');
        $activity = $this->ask('What is the activity?');
        $workers = $this->ask('How many workers?');
        $kvk_number = $this->ask('What is the KVK number?');

        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'company' => $company,
            'place' => $place,
            'contactperson' => $contactperson,
            'function' => $function,
            'phone' => $phone,
            'website' => $website,
            'activity' => $activity,
            'workers' => $workers,
            'kvk_number' => $kvk_number,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->info('User created successfully!');
    }
}
