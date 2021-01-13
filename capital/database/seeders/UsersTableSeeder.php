<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $editorRole = Role::where('name', 'editor')->first();
        $userRole = Role::where('name', 'user')->first();
        $memberRole = Role::where('name', 'member')->first();

        $editor = User::create([
            'name' => 'editor User',
            'email' => 'editor@editor.com',
            'password' => Hash::make('test1234')
        ]);
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('test1234')
        ]);
        $user = User::create([
            'name' => 'User User',
            'email' => 'user@user.com',
            'password' => Hash::make('test1234')
        ]);
        $member = User::create([
            'name' => 'Member Member',
            'email' => 'member@member.com',
            'password' => Hash::make('test1234')
        ]);

        $admin->roles()->attach($adminRole);
        $editor->roles()->attach($editorRole);
        $user->roles()->attach($userRole);
        $member->roles()->attach($memberRole);
    }
}
