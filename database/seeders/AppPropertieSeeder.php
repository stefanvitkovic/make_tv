<?php

namespace Database\Seeders;

use App\Models\App;
use App\Models\Localize;
use App\Models\AppPropertie;
use Illuminate\Database\Seeder;

class AppPropertieSeeder extends Seeder
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
                'app_id' => App::where('uid','maketv.rs.oriontv')->first()->id,
                'name' => 'Orion Televizija',
                'desc' => 'Orion Televizija omogucava ti da gledas tv uzivo na mobilnom telefonu ili tabletu',
                'locale_id' => Localize::where('uid','sr')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'app_id' => App::where('uid','maketv.rs.oriontv')->first()->id,
                'name' => 'Orion TV',
                'desc' => 'Orion TV allows you to watch live TV on your mobile phone or tablet',
                'locale_id' => Localize::where('uid','en')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        AppPropertie::insert($data);
    }
}
