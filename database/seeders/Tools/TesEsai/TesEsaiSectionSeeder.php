<?php

namespace Database\Seeders\Tools\TesEsai;

use App\Models\PsikotesSection;
use App\Models\PsikotesTool;
use Illuminate\Database\Seeder;

class TesEsaiSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $esai = PsikotesTool::where('name', 'Tes Esai')->first();

        PsikotesSection::create([
            'psikotes_tool_id' => $esai->id,
            'title' => 'Tes Esai',
            'order' => 1,
            'duration' => 20, 
        ]);
    }
}
