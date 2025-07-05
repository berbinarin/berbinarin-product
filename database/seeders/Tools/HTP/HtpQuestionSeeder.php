<?php

namespace Database\Seeders\Tools\HTP;

use App\Models\PsikotesQuestion;
use App\Models\PsikotesTool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HtpQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $htp = PsikotesTool::where('name', 'HTP')->with('sections')->first();

        $questions = [
            [
                'psikotes_section_id' => $htp->sections[0]->id,
                'order' => 1,
                'type' => 'upload',
                'text' => 
                    'Siapkan kertas HVS yang sudah berisi identitas. Tugas Anda adalah menggambar manusia, pohon, dan rumah dalam satu kertas tersebut. ' ,
                    'Setelah selesai, pada lembar identitas atau sebaliknya, tuliskan atau ceritakan gambar yang baru Anda gambar dengan satu kalimat. ',
                    'Satu kalimat yang menggambarkan gambar yang telah Anda buat. ' ,
                    'Foto kedua sisi kertas (identitas & gambar), lalu upload hasil gambar Anda di bawah ini.',
                'options' => [],
                'scoring' => [],
            ],
        ];

        foreach ($questions as $question) {
            PsikotesQuestion::create($question);
        }
    }
}
