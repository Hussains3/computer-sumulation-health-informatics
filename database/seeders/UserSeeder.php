<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Profile;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'user_name' => 'super_admin',
            'email' => 'admin@app.com',
            'password' => bcrypt('123456789')
        ]);

        $profile = Profile::created(['user_id' => $user->id]);
        $role = Role::where(['name' => 'Admin'])->first();
        $user->assignRole([$role->id]);
    }
}
