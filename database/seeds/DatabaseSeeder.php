<?php

use App\Message;
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
        // $this->call(UsersTableSeeder::class);

        $users = factory(User::class, 10)->create();

        $users->each(function ($user){
          $user->messages()->saveMany(factory(Message::class, 10)->make());
        });
    }
}
