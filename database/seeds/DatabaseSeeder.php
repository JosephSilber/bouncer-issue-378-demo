<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Bouncer::ability()->create([
        //     'name' => 'read-users'
        // ]);
        Bouncer::allow('superadmin')->everything();

        $user = User::create([
            'name' => 'Bouncer Test',
            'email' => 'test@example.org',
            'password' => 'supersecretpwd'
        ]);

        // Bouncer::allow($user)->to('read-users');
        Bouncer::assign('superadmin')->to($user);
    }
}
