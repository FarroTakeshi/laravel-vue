<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 25)->create();
        $users = [
            ['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => bcrypt('secret')],
        ];

        DB::table('users')->insert($users);
    }
}
