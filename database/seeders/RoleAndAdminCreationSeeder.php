<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleAndAdminCreationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users') ->insert(["name" => "Admin", "email" => "admin@gmail.com", "password" => bcrypt('12345678')]);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'L1']);
        Role::create(['name' => 'L2']);
        Role::create(['name' => 'L3']);
        Role::create(['name' => 'L4']);
        $user = User::where('email', 'admin@gmail.com')->first();
        $user->assignRole('admin');
    }
}
