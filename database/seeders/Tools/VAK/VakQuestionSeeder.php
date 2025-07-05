<?php

namespace Database\Seeders\Tools\VAK;

use App\Models\PsikotesQuestion;
use App\Models\PsikotesTool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VakQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $vak = PsikotesTool::where('name', 'VAK')->with('sections')->first();
        $questions = [
            [
                'psikotes_section_id' => $vak->sections[0]->id,
                    'order' => 1,
                    'type' => 'likert scale',
                    'text' => 'Saya menikmati mencorat-coret, dan bahkan buku catatan saya penuh dengan gambar di dalamnya.',
                    'options' => [
                        'Tidak Sesuai' => 'Tidak Sesuai',
                        'Cukup Sesuai' => 'Cukup Sesuai',
                        'Sangat Sesuai' => 'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[0]->id,
                    'order' => 2,
                    'type' => 'likert scale',
                    'text' => 'Saya akan lebih baik dalam mengingat sesuatu jika saya menuliskannya.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[0]->id,
                    'order' => 3,
                    'type' => 'likert scale',
                    'text' => 'Saya akan tersesat atau terlambat jika seseorang memberitahu saya untuk menuju ke suatu tempat baru dan saya tidak menuliskan petunjuknya.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[0]->id,
                    'order' => 4,
                    'type' => 'likert scale',
                    'text' => 'Ketika mencoba mengingat nomor telepon seseorang, atau mengingat sesuatu yang baru, saya menghubungkannya dengan sebuah gambar atau simbol di dalam pikiran.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[0]->id,
                    'order' => 5,
                    'type' => 'likert scale',
                    'text' => 'Jika saya mengikuti suatu ujian, saya dapat mengingat halaman buku teks dan dimana letak jawabannya berada.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[0]->id,
                    'order' => 6,
                    'type' => 'likert scale',
                    'text' => 'Melihat seseorang sambil mendengarkan, membuat saya tetap fokus.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[0]->id,
                    'order' => 7,
                    'type' => 'likert scale',
                    'text' => 'Menggunakan kartu bantuan saat belajar membantu saya mengingat materi untuk ujian.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[0]->id,
                    'order' => 8,
                    'type' => 'likert scale',
                    'text' => 'Sulit bagi saya untuk mengerti apa yang orang katakan manakala di saat yang sama ada seseorang yang berbicara atau bermain musik.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[0]->id,
                    'order' => 9,
                    'type' => 'likert scale',
                    'text' => 'Sulit bagi saya untuk mengerti sebuah lelucon ketika seseorang menceritakannya kepada saya.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[0]->id,
                    'order' => 10,
                    'type' => 'likert scale',
                    'text' => 'Lebih baik bagi saya untuk bekerja di tempat yang sepi.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            // Subtes 2
            [
                'psikotes_section_id' => $vak->sections[1]->id,
                    'order' => 1,
                    'type' => 'likert scale',
                    'text' => 'Tulisan tangan saya tidak terlihat rapi. Catatan saya dipenuhi dengan coretan dan hapusan.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[1]->id,
                    'order' => 2,
                    'type' => 'likert scale',
                    'text' => 'Jika saya sedang membaca, saya harus dibantu oleh jari untuk menunjuk ke arah bacaan.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[1]->id,
                    'order' => 3,
                    'type' => 'likert scale',
                    'text' => 'Catatan saya berisi tulisan yang sangat kecil, terdapat bercak kotoran atau salinan yang buruk ada pada tulisan saya.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[1]->id,
                    'order' => 4,
                    'type' => 'likert scale',
                    'text' => 'Saya mengerti bagaimana cara mengerjakan sesuatu jika seseorang menjelaskan langsung kepada saya, daripada harus saya harus membacanya buku petunjuknya sendiri.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[1]->id,
                    'order' => 5,
                    'type' => 'likert scale',
                    'text' => 'Saya lebih mudah mengingat dari hal-hal yang saya dengar,dibandingkan dari hal-hal yang saya lihat atau saya baca.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[1]->id,
                    'order' => 6,
                    'type' => 'likert scale',
                    'text' => 'Menulis sangat melelahkan karena saya menekan terlalu keras pensil.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[1]->id,
                    'order' => 7,
                    'type' => 'likert scale',
                    'text' => 'Mata saya mudah lelah, meskipun dokter mata bilang kalau mata saya baik-baik saja.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[1]->id,
                    'order' => 8,
                    'type' => 'likert scale',
                    'text' => 'Ketika saya membaca, saya sering keliru membaca kata-kata yang mempunyai bunyi serupa.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[1]->id,
                    'order' => 9,
                    'type' => 'likert scale',
                    'text' => 'Sulit bagi saya untuk membaca tulisan tangan orang lain.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[1]->id,
                    'order' => 10,
                    'type' => 'likert scale',
                    'text' => 'Jika saya mempunyai pilihan untuk mempelajari informasi baru melalui penjelasan guru atau buku, saya akan memilih untuk mendengarkan dari guru daripada membaca dari buku.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            // Subtes 3
            [
                'psikotes_section_id' => $vak->sections[2]->id,
                    'order' => 1,
                    'type' => 'likert scale',
                    'text' => 'Saya tidak suka membaca petunjuk pengerjaan suatu tugas, saya lebih suka untuk langsung mulai melaksanakannya.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[2]->id,
                    'order' => 2,
                    'type' => 'likert scale',
                    'text' => 'Saya belajar tentang sesuatu secara lebih baik pada saat saya memiliki kesempatan untuk mencoba melakukannya dan menunjukkan kepada orang lain cara melakukannya.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[2]->id,
                    'order' => 3,
                    'type' => 'likert scale',
                    'text' => 'Saya tidak terbiasa untuk belajar di meja belajar.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[2]->id,
                    'order' => 4,
                    'type' => 'likert scale',
                    'text' => 'Ketika menyelesaikan suatu permasalahan biasanya saya lebih sering mencoba-coba untuk menyelesaikannya daripada menggunakan buku panduan untuk memecahkannya.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[2]->id,
                    'order' => 5,
                    'type' => 'likert scale',
                    'text' => 'Sebelum saya mengikuti buku petunjuk, ada baiknya saya melihat orang lain melaksanakannya terlebih dahulu.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[2]->id,
                    'order' => 6,
                    'type' => 'likert scale',
                    'text' => 'Saya membutuhkan lebih banyak istirahat ketika sedang belajar.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[2]->id,
                    'order' => 7,
                    'type' => 'likert scale',
                    'text' => 'Saya tidak pandai dalam memberikan penjelasan atau arahan secara lisan.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[2]->id,
                    'order' => 8,
                    'type' => 'likert scale',
                    'text' => 'Saya tidak mudah tersesat, bahkan di lingkungan yang tidak pernah saya datangi.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[2]->id,
                    'order' => 9,
                    'type' => 'likert scale',
                    'text' => 'Saya bisa berpikir lebih baik ketika saya diberikan kebebasan untuk bergerak.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
            [
                'psikotes_section_id' => $vak->sections[2]->id,
                    'order' => 10,
                    'type' => 'likert scale',
                    'text' => 'Ketika saya tidak dapat memikirkan kata-kata tertentu, saya akan banyak menggunakan tangan untuk mengisyaratkan sesuatu dan menyebut sesuatu seperti “ehm-ah-eh”.',
                    'options' => [
                        'Tidak Sesuai',
                        'Cukup Sesuai',
                        'Sangat Sesuai',
                    ],
                    'scoring' => [
                        'Tidak Sesuai' => '1',
                        'Cukup Sesuai' => '2',
                        'Sangat Sesuai' => '3',
                    ],
            ],
        ];
        foreach ($questions as $question) {
            PsikotesQuestion::create($question);
        }

    }
}
