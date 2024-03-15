<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'first_name' => 'Roy',
            'last_name' => 'Nurfaza',
            'email' => 'fazaeuy@gmail.com',
            'phone' => '0888888',
            'user_id' => 1 // Sesuaikan dengan ID pengguna yang ingin Anda asosiasikan
        ]);
    }
}
