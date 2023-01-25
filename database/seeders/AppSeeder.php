<?php

namespace Database\Seeders;

use App\Models\App;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
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
                'short_name' => 'oriontv',
                'uid' => 'maketv.rs.oriontv',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        App::insert($data);
    }
}
