<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use Faker\Factory;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contact::factory()->count(10)->create(); // لإنشاء 10 سجلات
        Contact::factory()->count(10)->create();

    }
}
