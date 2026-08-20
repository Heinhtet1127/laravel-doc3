<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:test')]
#[Description('Command description')]
class TestCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        info(now());
        User::create([
            'name' => 'Test '.rand(1, 1000),
            'email' => 'test'.time().'@gmail.com',
            'password' => '123456',
        ]);
    }
}
