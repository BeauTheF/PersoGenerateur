<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
			'name'=>'AdminJo',
			'email'=>'1447238@cstj.qc.ca',
			'password'=>bcrypt('123456'),
			'nom'=>'Garcia',
			'prenom'=>'Jonathan',
			'permission'=>2,
        ]);
        $user->save();
        for ($i = 0; $i < 10; $i += 1) {
            $user = User::fake();
            $user->save();
        }
        // $this->call(UsersTableSeeder::class);
    }
}
