<?php

namespace Database\Seeders\Tools\EPI;

use App\Models\PsikotesQuestion;
use App\Models\PsikotesTool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpiQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $epi = PsikotesTool::where('name', 'EPI')->with('sections')->first();

        $questions = [
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 1,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda selalu bersemangat?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 2,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda sering membutuhkan kawan untuk membuat Anda gembira?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 3,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda adalah orang yang santai dan tidak terbebani oleh masalah?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 4,
                'type' => 'multiple choice',
                'text' => 'Apakah sangat sulit bagi Anda untuk menolak sesuatu?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 5,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda berpikir terlebih dahulu sebelum bertindak?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 6,
                'type' => 'multiple choice',
                'text' => 'Jika Anda telah berjanji, sulit apapun kondisinya apakah Anda akan merealisikannya?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Lie',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 7,
                'type' => 'multiple choice',
                'text' => 'Apakah suasana hati Anda berubah-ubah?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 8,
                'type' => 'multiple choice',
                'text' => 'Apakah biasanya Anda melakukan dan mengatakan sesuatu dengan cepat, tanpa Anda pikirkan terlebih dahulu?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 9,
                'type' => 'multiple choice',
                'text' => 'Pernahkah Anda merasa sedih tanpa sebab yang jelas?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 10,
                'type' => 'multiple choice',
                'text' => 'Apakah setiap tantangan akan Anda hadapi?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 11,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda tiba-tiba merasa malu saat ingin berbicara dengan orang asing yang atraktif?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 12,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda kadang-kadang tidak dapat menahan kemarahan Anda?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Lie',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 13,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda sering melakukan sesuatu secara tiba-tiba?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 14,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda merasa khawatir akan tindakan atau perkataan Anda yang tidak semestinya Anda lakukan/ucapkan?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 15,
                'type' => 'multiple choice',
                'text' => 'Pada pada umumnya Anda lebih suka membaca daripada bermain-main?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 16,
                'type' => 'multiple choice',
                'text' => 'Apakah perasaan Anda mudah tersinggung?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 17,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda suka sekali bepergian?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 18,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda kadang-kadang mempunyai pikiran atau gangguan yang Anda tidak inginkan untuk diketahui oleh orang lain?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Lie',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 19,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda kadang-kadang sangat bersemangat dan kadang-kadang sangat lesu?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 20,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda lebih suka mempunyai teman sedikit tapi betul-betul akrab?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 21,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda sering melamun?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 22,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda membalas membentak jika ada orang yang membentak kepada Anda?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Lie',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 23,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda sering terganggu perasaan bersalah?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 24,
                'type' => 'multiple choice',
                'text' => 'Apakah semua kebiasaan Anda baik dan disukai?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Lie',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 25,
                'type' => 'multiple choice',
                'text' => 'Apakah biasanya Anda dapat bergembira pada suatu pesta yang meriah?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 26,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda merasa diri Anda kadang tegang atau kaku?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 27,
                'type' => 'multiple choice',
                'text' => 'Apakah orang lain menganggap diri Anda seorang yang bersemangat?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 28,
                'type' => 'multiple choice',
                'text' => 'Setelah Anda menyelesaikan sesuatu yang penting, apakah Anda sering merasa seharusnya dapat mengerjakannya dengan lebih baik?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 29,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda lebih senang diri jika Anda ada bersama dengan orang lain?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 30,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda kadang-kadang suka bergosip?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Lie',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 31,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda tidak dapat tertidur karena banyak pikiran di kepala Anda?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 32,
                'type' => 'multiple choice',
                'text' => 'Jika ada sesuatu yang ingin Anda ketahui, apakah Anda lebih suka mencarinya di buku daripada menanyakannya kepada seseorang?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 33,
                'type' => 'multiple choice',
                'text' => 'Apakah jantung Anda sering berdebar-debar?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 34,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda suka akan jenis pekerjaan yang membutuhkan kecermatan dan ketelitian?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 35,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda sering gemetar tanpa suatu sebab?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 36,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda akan 100% jujur tentang suatu hal penting, meskipun Anda tahu bahwa Anda tidak akan pernah ketahuan?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Lie',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 37,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda benci berkumpul bersama orang-orang suka mengolok-olok satu sama lain?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 38,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda orang yang mudah terpancing amarahnya?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 39,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda suka akan pekerjaan yang memerlukan kecepatan dalam bertindak?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 40,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda mengkhawatirkan kejadian-kejadian yang kurang baik yang mungkin bisa terjadi?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 41,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda termasuk orang yang lambat dan tidak tergesa-gesa dalam bertindak?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 42,
                'type' => 'multiple choice',
                'text' => 'Pernahkah Anda lambat dalam sebuah perjanjian atau pekerjaan?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Lie',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 43,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda sering bermimpi buruk?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 44,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda sangat suka mengobrol dengan orang lain, sehingga Anda senang jika dapat mengobrol dengan orang asing?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 45,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda merasa suka terganggu oleh perasaan sakit dan nyeri?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 46,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda merasa sangat kesal, jika Anda lama tidak bertemu dengan orang banyak?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 47,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda menganggap diri Anda seorang yang gugup?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 48,
                'type' => 'multiple choice',
                'text' => 'Dari semua kenalan Anda, apakah ada diantara mereka yang tidak Anda sukai?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Lie',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 49,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda termasuk orang yang cukup percaya diri?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 50,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda mudah tersinggung apabila orang lain tahu pekerjaan Anda salah?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 51,
                'type' => 'multiple choice',
                'text' => 'Sulitkah bagi Anda untuk benar-benar menikmati pesta yang meriah?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 52,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda merasa terganggu karena tidak percaya diri?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 53,
                'type' => 'multiple choice',
                'text' => 'Dapatkah Anda memeriahkan pesta yang membosankan?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 54,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda kadang berbicara mengenai hal-hal yang tidak Anda ketahui?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Lie',
                    'jawaban_benar' => 'Tidak'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 55,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda mengkhawatirkan kesehatan Anda?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 56,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda suka jahil pada orang lain?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Extroversion',
                    'jawaban_benar' => 'Ya'
                ],
            ],
            [
                'psikotes_section_id' => $epi->sections[0]->id,
                'order' => 57,
                'type' => 'multiple choice',
                'text' => 'Apakah Anda menderita sulit tidur?',
                'options' => ['Ya', 'Tidak'],
                'scoring' => [
                    'kategori' => 'Neuroticism',
                    'jawaban_benar' => 'Ya'
                ],
            ],
        ];

        foreach ($questions as $question) {
            PsikotesQuestion::create($question);
        }
    }
}
