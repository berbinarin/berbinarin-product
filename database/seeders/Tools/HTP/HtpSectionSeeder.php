<?php

namespace Database\Seeders\Tools\HTP;

use App\Models\PsikotesSection;
use App\Models\PsikotesTool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HtpSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $htp = PsikotesTool::where('name', 'HTP')->first();

        PsikotesSection::create([
            'psikotes_tool_id' => $htp->id,
            'title' => 'Instruksi Tes HTP',
            'order' => 1,
            'duration' => 7,
        ]);
    }
}
