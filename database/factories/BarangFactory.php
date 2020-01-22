<?php

use App\Kategori;
use Faker\Generator as Faker;

$factory->define(App\Barang::class, function (Faker $faker) {
    return [
        'nama' => $faker->word,
        'kategori' => function(){
            return Kategori::all()->random();
        },
        'satuan' => $faker->word,
        'harga_jual' => $faker->numberBetween($min = 1000, $max = 100000),
        'stok' => $faker->randomDigit,
        'gambar' => 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg'
    ];
});
