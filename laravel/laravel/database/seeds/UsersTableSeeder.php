<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Ad;
use App\Insight;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function ($user) {
            factory(Ad::class, 3)->create([
                'user_id' => $user->id,
            ])->each(function ($ad) {
                factory(Insight::class, 1000)->create([
                    'ad_id' => $ad->id
                ]);
            });
        });
    }
}
