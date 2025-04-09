<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\User;  // Correctly import the User model

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Optional: Truncate the users table to avoid duplicates
        DB::table('users')->truncate(); // This clears the table before seeding

        // Get the JSON data from the file
        $json = File::get(database_path('json/users.json'));  // Use `database_path()` to point to correct location
        $users = collect(json_decode($json, true));  // Decode the JSON and return as an associative array

        // Loop through the users and insert them into the database
        foreach ($users as $user) {
            User::create([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'address' => $user['address'],
                'age' => $user['age'],
                'city' => $user['city'],
            ]);
        }
    }
}

