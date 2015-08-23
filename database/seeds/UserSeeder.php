<?php


use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $admin = Role::create(['name' => 'admin', 'display_name' => 'Admin']);
        $nonadmin = Role::create(['name' => 'nonadmin', 'display_name' => 'Non Admin']);
        $customer = Role::create(['name' => 'customer', 'display_name' => 'Customer']);

        
        $adminUser = [
            'name' => 'THX-1138',
            'email' => 'THX-1138@skynet.com',
            'password' => Hash::make('1234')

        ];
        
        $nonAdminUser = [
            'name' => 'THX-1137',
            'email' => 'THX-1137@skynet.com',
            'password' => Hash::make('1234')
        ];
        
        $adminUser = User::create($adminUser);
        $adminUser->attachRole($admin);
        $nonAdminUser = User::create($nonAdminUser);
        $nonAdminUser->attachRole($nonadmin);
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $customerUser = User::create([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'password' => Hash::make('123456')

            ]);

            $customerUser->attachRole($customer);
            
        }


    }
}
