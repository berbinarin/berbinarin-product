<?php

namespace Database\Seeders\Tools\BAUM;

use App\Models\PsikotesQuestion;
use App\Models\PsikotesTool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaumQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $baum = PsikotesTool::where('name', 'BAUM')->with('sections')->first();

        $questions = [
            [
                'psikotes_section_id' => $baum->sections[0]->id,
                'order' => 1,
                'type' => 'image upload',
                'text' => 
                    'Silakan siapkan 3 lembar kertas HVS A4 dan pensil HB. Tulis identitas (nama, usia, jenis kelamin, tanda tangan) di pojok kiri atas setiap kertas. ' ,
                    'Balik kertas pada bagian kosong, lalu gambar sebuah pohon. Setelah selesai, tuliskan nama pohon yang digambar di halaman identitas atau sebaliknya. ' ,
                    'Foto hasil gambar baik sisi identitas maupun sisi gambar, lalu upload foto hasil gambar Anda di bawah ini.',
                'options' => [],
                'scoring' => [],
            ],
        ];

        foreach ($questions as $question) {
            PsikotesQuestion::create($question);
        }
    }
}
