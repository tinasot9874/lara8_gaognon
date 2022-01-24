<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class storeSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store_settings')->insert([
            'option_name'  => 'store_name',
            'option_value' => 'Shop Store Lara 8'
        ]);
        DB::table('store_settings')->insert([
            'option_name'  => 'tagline',
            'option_value' => 'Just another Laravel site'
        ]);
        DB::table('store_settings')->insert([
            'option_name'  => 'site_url',
            'option_value' => 'http://127.0.0.1:8000/'
        ]);
        DB::table('store_settings')->insert([
            'option_name'  => 'home_url',
            'option_value' => 'http://127.0.0.1:8000/'
        ]);
        DB::table('store_settings')->insert([
            'option_name'  => 'admin_url',
            'option_value' => 'http://127.0.0.1:8000/admin/'
        ]);
        DB::table('store_settings')->insert([
            'option_name'  => 'admin_email',
            'option_value' => 'admin@gmail.com'
        ]);
        DB::table('store_settings')->insert([
            'option_name'  => 'start_of_week',
            'option_value' => 1
        ]);
        DB::table('store_settings')->insert([
            'option_name'  => 'timezone_string',
            'option_value' => 'Asia/Ho_Chi_Minh'
        ]);
    }
}
