<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Create 100 random users
         */
        factory(App\User::class, 100)->create();


        /*
         * Create Admin user
         */
        User::create([
            'email' => 'test@admin.nl',
            'password' => 'admin',
            'name' => 'Admin',
            'dob' => new DateTime(),
            'address' => 'Teststraat 1',
            'place' => 'Teststad',
            'zip' => '1900 aa',
            'phone_nr' => '0612345678',
            'admin' => 1,
        ]);


        /*
         * Create categories
         */
        Category::create([
            'user_id' => null,
            'name' => 'Koffie',
            'image' => 'seed/koffie.jpg',
        ]);

        Category::create([
            'user_id' => null,
            'name' => 'Chocolade',
            'image' => 'seed/choc.jpg',
        ]);

        Category::create([
            'user_id' => null,
            'name' => 'Latte',
            'image' => 'seed/lattemacchiato.jpg',
        ]);

        Category::create([
            'user_id' => null,
            'name' => 'Cold',
            'image' => 'seed/cold.jpg',
        ]);

        Category::create([
            'user_id' => null,
            'name' => 'Thee',
            'image' => 'seed/thee.jpg',
        ]);

        /*
         * Create products
         */
        Product::create([
            'user_id' => null,
            'name' => 'Cappuccino',
            'description' => 'Heerlijk romige cappuccino',
            'price' => 2.50,
            'image' => 'seed/capp.jpeg',
            'category_id' => 3,
        ]);


        Product::create([
            'user_id' => null,
            'name' => 'Espresso',
            'description' => 'Originele Siciliaanse Espresso',
            'price' => 2.50,
            'image' => 'seed/espresso.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'user_id' => null,
            'name' => 'Latte Macchiato',
            'description' => 'Espresso tussen twee lagen melk',
            'price' => 2.50,
            'image' => 'seed/lattemacchiato.jpg',
            'category_id' => 3
        ]);
    }
}
