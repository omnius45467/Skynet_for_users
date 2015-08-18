<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('posts')->delete();
        
        $users = User::all();
        
        $faker = Faker::create();
        
        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'content' => $faker->sentence(),
                'user_id' => $users->random()->id,


            ]);

        }
    }
}
