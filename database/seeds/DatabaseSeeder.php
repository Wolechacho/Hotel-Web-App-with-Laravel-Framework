<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('rooms')->insert([
             'name'=>'Futon Holding',
            'description'=>  'Make your life good',
            'price' => 300,
            'imageUrl' => 'hotel2.jpg',
            'roomType' => 'Double'
        ]);

         DB::table('rooms')->insert([
             'name'=>'Cosmos Room',
            'description'=>'Find good rest and comfort',
            'price' => 100,
            'imageUrl' => 'hotel3.jpg',
            'roomType' => 'Single'
        ]);

         DB::table('rooms')->insert([
             'name'=>'Sapphire Lounge',
            'description'=>'Romance never gone',
            'price' => 650,
            'imageUrl' => 'hotel4.jpg',
            'roomType' => 'Double'
        ]);
         DB::table('rooms')->insert([
             'name'=>'Solomons Porch',
            'description'=>  'Make your life good',
            'price' => 350,
            'imageUrl' => 'hotel5.jpg',
            'roomType' => 'Standard'
        ]);

         DB::table('rooms')->insert([
             'name'=>'Nafiya Gayes Comfort',
            'description'=>'Your need our care',
            'price' => 200,
            'imageUrl' => 'hotel6.jpg',
            'roomType' => 'Single'
        ]);

         DB::table('rooms')->insert([
             'name'=>'Gods Paradise',
            'description'=>'Feels you are in heaven',
            'price' => 400,
            'imageUrl' => 'hotel15.jpg',
            'roomType' => 'Double'
        ]);
         DB::table('rooms')->insert([
             'name'=>'Noah Ark',
            'description'=>'Always feel at home',
            'price' => 800,
            'imageUrl' => 'hotel16.jpg',
            'roomType' => 'Standard'
        ]);

         DB::table('rooms')->insert([
             'name'=>'Davids Comfort Room',
            'description'=>'Wow never stops',
            'price' => 350,
            'imageUrl' => 'hotel18.jpg',
            'roomType' => 'Double'
        ]);

         DB::table('rooms')->insert([
             'name'=>'Paradise close street',
            'description'=>'Close to Paradise',
            'price' => 450,
            'imageUrl' => 'hotel21.jpg',
            'roomType' => 'Single'
        ]);


       
    }
}
