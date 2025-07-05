<?php

namespace Database\Seeders\Tools\DAP;

use App\Models\PsikotesQuestion;
use App\Models\PsikotesTool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DapQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dap = PsikotesTool::where('name', 'DAP')->with('sections')->first();

        $questions = [
            [
                'psikotes_section_id' => $dap->sections[0]->id,
                'order' => 1,
                'type' => 'image upload',
                'text' => 
                    'Silakan ambil kertas HVS baru, tulis identitas (nama, usia, jenis kelamin) di pojok kiri atas. ' ,
                    'Balik kertas pada bagian kosong. Tugas Anda adalah menggambar seorang manusia. ' ,
                    'Setelah selesai, pada lembar identitas atau sebaliknya, tuliskan:\n' ,
                    '- Nama\n- Usia\n- Jenis Kelamin\n- Profesi\n- Aktivitas sedang apa\n- Alasan memilih menggambar itu\n' ,
                    'Foto kedua sisi kertas identitas & gambar, lalu upload hasil gambar Anda di bawah ini.',
                'options' => [],
                'scoring' => [],
            ],
        ];

        foreach ($questions as $question) {
            PsikotesQuestion::create($question);
        }
    }
}
