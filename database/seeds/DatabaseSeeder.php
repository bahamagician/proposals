<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Proposal;
use App\Page;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['users', 'proposals', 'pages'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }

        factory(User::class, 20)->create()->each(
            function($user) {
                factory(Proposal::class, 5)->create(['user_id' => $user->id])->each(
                    function ($proposal) {
                        factory(Page::class, 10)->create(['proposal_id' => $proposal->id]);
                    }
                );
            }
        );
    }
}
