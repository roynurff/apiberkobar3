<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'street' => 'Jl. Malioboro',
            'city' => 'Solo',
            'province' => 'Jawa Tengah',
            'country' => 'Indonesia',
            'postal_code' => 61243 // Sesuaikan dengan ID pengguna yang ingin Anda asosiasikan
        ]);
    }
}
