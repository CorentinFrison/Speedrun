<?php

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

        DB::table('users')->insert([
            'username' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'live_url' => 'www.twitch.tv/'.Str::random(10),
            'avatar' => '/storage/avatar.jpg',
        ]);

        DB::table('games')->insert([
            'name' => Str::random(10),
            'desc' => Str::random(50),
            'img' => '/storage/portal.png',
        ]);

        DB::table('races')->insert([
            'name' => Str::random(10),
            'p1_id' => rand(0,10),
            'p2_id' => rand(0,10),
            'p1_vod' => 'https://player.twitch.tv/?video='.rand(100000000,999999999),
            'p2_vod' => 'https://player.twitch.tv/?video='.rand(100000000,999999999),
            'p1_time' => '2015-12-31 00:00:00',
            'p2_time' => '2010-01-01 00:00:00',
            'deadline' => '2020-01-01 00:00:00',
        ]);

        DB::table('categories')->insert([
            'game_id' => rand(0,10),
            'run_id' => rand(0,10),
            'name' => Str::random(10),
        ]);
    }
}
