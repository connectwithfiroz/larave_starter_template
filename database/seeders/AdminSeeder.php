<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = \App\Models\Admin::class;
        if($model::where('id', 1)->doesntExist()){
            $model::create(
                [
                    'id' => 1,
                    'firstname' => 'Admin',
                    'name' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('12345678'),
                    'password_hint' => '1-8',
                    'phone' => '9712345678'
                 ]
            );
        }

    }
}
