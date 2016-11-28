<?php

use Illuminate\Database\Seeder;

class ProposalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_ids = \DB::table('users')->select('id')->get();
//        $user_id = $faker->randomElement($user_ids)->id;
        dd(User::all()->random()->id);
        factory('App\Proposal', 50)->create([
            'user_id' => $allUsers->random()->id
        ]);
    }
}
