<?php

namespace Database\Seeders;

use App\Models\Localize;
use Illuminate\Database\Seeder;

class LocalizeSeeder extends Seeder
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
                'uid' => 'sr',
                'name' => 'Srpski',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uid' => 'en',
                'name' => 'English',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Localize::insert($data);
    }
}
