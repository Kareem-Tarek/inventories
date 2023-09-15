<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([ //ID = 1
            'name'       => "KareemDEV",
            'email'      => 'admin@gmail.com',
            'password'   => bcrypt('123456789'),
            'phone'      => '01010110457',
            'address'    => 'Nasr City, Cairo, Egypt',
            'created_at' => Carbon::now()->toDateTimeString(), // Also Carbon::now()->toDateTimeString() OR Carbon::now OR now()
            'updated_at' => null,
        ]);
    }
}
