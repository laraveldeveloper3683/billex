<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();
       $user = User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole('admin');
    }
}
