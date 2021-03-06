<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'         => 'Computers',
            'slug'         => 'computer',
            'desc'         => 'Our computers and tablets include all the big brands.',
            'image'        => 'assets/media/stock/ecommerce/68.gif',
            'isDisplay'    => false,
        ]);
        DB::table('categories')->insert([
            'name'         => 'Watches',
            'slug'         => 'watch',
            'desc'         => 'Our range of watches are perfect whether you’re looking to upgrade',
            'image'        => 'assets/media/stock/ecommerce/71.gif',
        ]);
        DB::table('categories')->insert([
            'name'         => 'Headphones',
            'slug'         => 'headphone',
            'desc'         => 'Our big range of headphones makes it easy to upgrade your device at a great price.',
            'image'        => 'assets/media/stock/ecommerce/58.gif',
        ]);
        DB::table('categories')->insert([
            'name'         => 'Footwear',
            'slug'         => 'footwear',
            'desc'         => 'Whatever your activity needs are, we’ve got you covered.',
            'image'        => 'assets/media/stock/ecommerce/52.gif',
        ]);
        DB::table('categories')->insert([
            'name'         => 'Household',
            'slug'         => 'household',
            'desc'         => 'Spice up your home decor with our wide selection.',
            'image'        => 'assets/media/stock/ecommerce/50.gif',
        ]);
        DB::table('categories')->insert([
            'name'         => 'Apple',
            'parent_id'    => 1,
            'slug'         => 'apple',
            'desc'         => 'Everything you love about an Apple Store is online: all the products, personal shopping help, trade-in, flexible payment options, and expert support.',
            'image'        => 'assets/media/categories/mac.png',
        ]);
        DB::table('categories')->insert([
            'name'         => 'SamSung',
            'parent_id'    => 1,
            'slug'         => 'samsung',
            'desc'         => 'Discover the latest in electronic &amp; smart appliance technology with Samsung',
            'image'        => 'assets/media/categories/samsung.png',
        ]);
        DB::table('categories')->insert([
            'name'         => 'Table',
            'parent_id'    => 7,
            'slug'         => 'table',
            'desc'         => 'Discover the latest in electronic &amp; smart appliance technology with Samsung',
            'image'        => 'assets/media/categories/samsung.png',
        ]);
        DB::table('categories')->insert([
            'name'         => 'iPhone',
            'parent_id'    => 6,
            'slug'         => 'iPhone',
            'desc'         => 'iPhone iPhone iPhone iPhone iPhoneiPhone iPhone ',
            'image'        => 'assets/media/categories/mac.png',
        ]);
    }
}
