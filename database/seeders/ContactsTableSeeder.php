<?php

namespace Database\Seeders;

use app\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContactsTableSeeder extends Seeder
{

    public function run()
    {
        Contact::factory()->count(20)->create();

    }
}