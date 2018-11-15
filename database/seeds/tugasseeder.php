<?php

use Illuminate\Database\Seeder;

class tugasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\factory::create();
		$limit = 5;
		
		$barang=1;
		for ($i=0 ; $i<$limit ; $i++){
			DB::tugas('barang')->insert([
            'nama_barang' => 'barang'.$barang,
            'stok' => $faker->randomDigit,
            'harga' => $faker->randomNumber(5),
            'expired_date' => $faker->date,
            'tanggal_produksi' => $faker->date,
        ]);
		$barang++;
		}
		}
    }