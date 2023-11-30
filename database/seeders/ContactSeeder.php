<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Contact::truncate();
        Contact::create([
            'address' => 'Empty data',
            'phone' => 'Empty data',
            'telephone' => 'Empty data',
            'email' => 'Empty data',
            'website' => 'Empty data',
            'facebook' => 'Empty data',
            'instagram' => 'Empty data',
            'youtube' => 'Empty data',
        ]);
    }
}
