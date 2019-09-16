<?php

use Illuminate\Database\Seeder;

class categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

     foreach (range(0, 10) as $index) {
            $image = $faker->image(public_path('images'));
            $im=str_replace(' ','',public_path('\ '));
            $imagePath = str_replace($im,'', $image);
            \App\category::create([
                'name' => $faker->name,
                'lang'=>$faker->randomElement(['En','Ar']),
                'image'=>$imagePath

            ]);

        }

        foreach (range(0,10)as $index){

            \App\admin::create([
                'name'=>$faker->name,
                'username'=>$faker->userName,
                'phone'=>$faker->phoneNumber,
                'email'=>$faker->email,
                'password'=>$faker->password,
            ]);

        }
    }
}
