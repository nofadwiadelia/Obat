<?php

use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
		
		$limit = 10;
		
		for($i = 0; $i < $limit; $i++){
			DB::table('model_obats')->insert([
				'nama_obat' => $faker->nama_obat,
				'harga' => $faker->harga,
				'stok' => $faker->stok,
				'expired_date' => $faker->expired_date,
				'production_date' => $faker->production_date,
			]);
		}
    }
}
