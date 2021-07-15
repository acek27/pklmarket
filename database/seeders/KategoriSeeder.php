<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
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
                'nama_kategori' => 'Makanan',
            ],
            [
                'nama_kategori' => 'Minuman',
            ],
            [
                'nama_kategori' => 'Pakaian',
            ],
            [
                'nama_kategori' => 'Cemilan',
            ],
        ];
        foreach ($data as $datum) {
            Kategori::create($datum);
        }
    }
}
