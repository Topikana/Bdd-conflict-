<?php

use App\Group;
use App\Project;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
//        $faker = Faker\Factory::create('fr_FR');
		factory(User::class, 30)->create()->each(function($user)
        {
            $user->projects()->sync(factory(Project::class)->create());
        });


//		                        ->each(function ($user) {
//			                        $user->projects()->save(factory( Project::class)->make());
//		                        });
	}
}
