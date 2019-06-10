<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($x = 1; $x <= 20; $x++){

        	DB::table('siswa')->insert([
        		'nama'=>$faker->name,
        		'nik'=>$faker->numberBetween(1167050001,1167050100),
                'email'=>$faker->email,
                'alamat'=>$faker->address,
                'no_telp'=>$faker->phoneNumber,
                'tmpt_lahir'=>$faker->city,
                'tgl_lahir'=>$faker->date("Y-m-d H:i:s"),
                'jk'=>$faker->randomElement($array = array('Laki-laki','Perempuan')),
        		'created_at'=>$faker->date("Y-m-d H:i:s")

        	]);
        }
    }
}
