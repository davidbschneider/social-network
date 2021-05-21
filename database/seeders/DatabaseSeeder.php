<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Facade\Ignition\Exceptions\UnableToShareErrorException;
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
        User::factory(10)->create();

        $user = User::firstOrCreate([
            'email'=>'d4vid81@gmail.com'
        ],[
            'name' => 'David',
            'password' => bcrypt('secret')
        ]);

        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Group",
            'personal_team' => true,
        ]));
    }
}
