<?php


use App\User;
use App\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ProfileSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('profiles')->delete();
        
        $users = User::all();
        $faker = Faker::create();
        
        foreach($users as $user){
            Profile::create([
                'description' => $faker->sentence(),
                'user_id' => $user->id

            ]);
            
        }
    }
}