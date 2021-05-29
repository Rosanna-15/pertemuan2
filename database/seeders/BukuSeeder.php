<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = new Buku();
        $data1->tahun ="2016";
        $data1->nama_penerbit = "Erlangga";
        $data1->save();

        $data2 = new Buku();
        $data2->tahun ="2019";
        $data2->nama_penerbit = "Grasindo";
        $data2->save();
    }
}
