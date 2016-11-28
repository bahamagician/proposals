<?php

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
//        factory('App\Proposal', 10)->create();

        factory(App\User::class, 20)->create()->each(
            function($user) {
                factory(App\Proposal::class, 5)->create(['user_id' => $user->id])->each(
                    function ($proposal) {
                        factory(App\Page::class, 10)->create(['proposal_id' => $proposal->id]);
                    }
                );
            }
        );
    }
}
