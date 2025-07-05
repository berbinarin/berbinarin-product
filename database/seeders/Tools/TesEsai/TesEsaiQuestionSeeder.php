<?php

namespace Database\Seeders\Tools\TesEsai;

use App\Models\PsikotesQuestion;
use App\Models\PsikotesTool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TesEsaiQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $esai = PsikotesTool::where('name', 'Tes Esai')->with('sections')->first();

        $questions = [
            [
                'psikotes_section_id' => $esai->sections[0]->id,
                'order' => 1,
                'type' => 'essay',
                'text' => 'Jelaskan pandangan Anda mengenai peran Anda dalam perubahan ini nantinya dan apa saja yang harus dilakukan sebagai seorang karyawan di posisi tersebut?',
                'options' => [],
                'scoring' => [],
            ],
            [
                'psikotes_section_id' => $esai->sections[0]->id,
                'order' => 2,
                'type' => 'essay',
                'text' => 'Bagaimana cara Anda agar dapat menguasai prosedur kerja di posisi Anda?',
                'options' => [],
                'scoring' => [],
            ],
            [
                'psikotes_section_id' => $esai->sections[0]->id,
                'order' => 3,
                'type' => 'essay',
                'text' => 'Tuliskan 1 prestasi terbaik yang pernah Anda raih dalam 2 tahun terakhir!',
                'options' => [],
                'scoring' => [],
            ],
            [
                'psikotes_section_id' => $esai->sections[0]->id,
                'order' => 4,
                'type' => 'essay',
                'text' => 'Jika Anda perlu untuk menyelesaikan suatu urusan yang ada di rumah, sementara saat ini Anda sedang di tengah jam kerja, apa yang akan Anda lakukan?',
                'options' => [],
                'scoring' => [],
            ],
            [
                'psikotes_section_id' => $esai->sections[0]->id,
                'order' => 5,
                'type' => 'essay',
                'text' => 'Ketika Anda ditegur di depan pada staf lainnya oleh atasan, bagaimana reaksi Anda setelahnya?',
                'options' => [],
                'scoring' => [],
            ],
            [
                'psikotes_section_id' => $esai->sections[0]->id,
                'order' => 6,
                'type' => 'essay',
                'text' => 'Berikan satu contoh dimana Anda berhasil menyelesaikan tugas di dalam tim!',
                'options' => [],
                'scoring' => [],
            ],
        ];

        foreach ($questions as $question) {
            PsikotesQuestion::create($question);
        }
    }
}
