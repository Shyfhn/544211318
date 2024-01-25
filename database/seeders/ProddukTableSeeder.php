<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProddukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('produk')->insert(array(
            ['nama_produk'=>'Sabun Lifeboy','harga_jual'=>'2000'],
            ['nama_produk'=>'Sabun Lux','harga_jual'=>'4000'],
            ['nama_produk'=>'Sabun Cap Tangan','harga_jual'=>'100000'],
            ['nama_produk'=>'Sabun Mama Lemon','harga_jual'=>'30000']
        ));
    }
}
