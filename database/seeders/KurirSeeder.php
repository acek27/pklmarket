<?php

namespace Database\Seeders;

use App\Models\Kurir;
use Illuminate\Database\Seeder;

class KurirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama_kurir' => 'JOKER',
                'kontak' => '6281284622150',
                'logo' => null
            ],
            [
                'nama_kurir' => 'JOKI SITUBONDO',
                'kontak' => '6289513528627',
                'logo' => null
            ],
            [
                'nama_kurir' => 'SI-JEK',
                'kontak' => null,
                'logo' => null
            ],
            [
                'nama_kurir' => 'NU-JEK',
                'kontak' => null,
                'logo' => null
            ],
            [
                'nama_kurir' => 'O-TRANS',
                'kontak' => '6285204955000',
                'logo' => null
            ],
            [
                'nama_kurir' => 'GRAB',
                'kontak' => null,
                'logo' => null
            ],
        ];
        foreach ($data as $datum) {
            Kurir::create($datum);
        }
    }
}
