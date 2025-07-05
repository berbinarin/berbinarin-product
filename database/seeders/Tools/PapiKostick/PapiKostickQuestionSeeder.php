<?php

namespace Database\Seeders\Tools\PapiKostick;

use App\Models\PsikotesQuestion;
use App\Models\PsikotesTool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PapiKostickQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $papiKostick = PsikotesTool::where('name', 'Papi Kostick')->with('sections')->first();
        $questions = [
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 1,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya seorang pekerja keras',
                    'B' => 'Saya bukan seorang pemurung',
                ],
                'scoring' => [
                    'A' => 'G',
                    'B' => 'E',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 2,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka bekerja lebih baik dari orang lain',
                    'B' => 'Saya suka menekuni pekerjaan yang saya lakukan sampai selesai',
                ],
                'scoring' => [
                    'A' => 'A',
                    'B' => 'N',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 3,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka memperagakan kepada orang lain bagaimana cara melakukan sesuatu',
                    'B' => 'Saya ingin bekerja sebaik mungkin',
                ],
                'scoring' => [
                    'A' => 'P',
                    'B' => 'A',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 4,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka melakukan hal-hal yang lucu',
                    'B' => 'Saya senang mengatakan kepada orang lain, apa yang harus dilakukannya',
                ],
                'scoring' => [
                    'A' => 'X',
                    'B' => 'P',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 5,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka berkumpul dalam kelompok',
                    'B' => 'Saya suka jika diperhatikan oleh orang lain',
                ],
                'scoring' => [
                    'A' => 'B',
                    'B' => 'X',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 6,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya senang bersahabat intim',
                    'B' => 'Saya suka berteman dalam suatu kelompok',
                ],
                'scoring' => [
                    'A' => 'O',
                    'B' => 'B',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 7,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya cepat berubah jika saya rasa diperlukan',
                    'B' => 'Saya berusaha untuk intim dengan teman-teman',
                ],
                'scoring' => [
                    'A' => 'Z',
                    'B' => 'O',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 8,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka membalas jika saya disakiti',
                    'B' => 'Saya suka melakukan hal-hal yang baru dan berbeda',
                ],
                'scoring' => [
                    'A' => 'K',
                    'B' => 'Z',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 9,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya ingin agar atasan menyukai saya',
                    'B' => 'Saya suka memberitahui orang lain jika mereka salah',
                ],
                'scoring' => [
                    'A' => 'F',
                    'B' => 'K',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 10,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka mengikuti petunjuk-petunjuk yang diberikan pada saya',
                    'B' => 'Saya suka menyenangkan atasan',
                ],
                'scoring' => [
                    'A' => 'W',
                    'B' => 'F',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 11,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya berusaha bekerja “keras” (sekuat tenaga)',
                    'B' => 'Saya seorang yang teratur. Saya menaruh semua barang pada tempatnya',
                ],
                'scoring' => [
                    'A' => 'G',
                    'B' => 'C',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 12,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya dapat mempengaruhi orang lain untuk melakukan apa yang saya inginkan',
                    'B' => 'Saya tidak mudah marah',
                ],
                'scoring' => [
                    'A' => 'L',
                    'B' => 'E',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 13,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka memberitahukan kepada kelompok tentang apa yang harus mereka kerjakan',
                    'B' => 'Saya selalu menekuni suatu pekerjaan sampai selesai',
                ],
                'scoring' => [
                    'A' => 'P',
                    'B' => 'N',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 14,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka centil dan ingin diperhatikan',
                    'B' => 'Saya ingin menjadi orang yang sangat berhasil',
                ],
                'scoring' => [
                    'A' => 'X',
                    'B' => 'A',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 15,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya ingin sesuai dan diterima dalam kelompok',
                    'B' => 'Saya suka membantu orang lain mengambil keputusan',
                ],
                'scoring' => [
                    'A' => 'B',
                    'B' => 'P',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 16,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya cemas bila seseorang tidak menyukai saya',
                    'B' => 'Saya suka bilang orang-orang memperhatikan saya',
                ],
                'scoring' => [
                    'A' => 'O',
                    'B' => 'X',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 17,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka mencoba hal-hal yang baru',
                    'B' => 'Saya lebih suka bekerja bersama orang lain daripada sendiri',
                ],
                'scoring' => [
                    'A' => 'Z',
                    'B' => 'B',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 18,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya kadang-kadang menyalahkan orang lain jika terjadi kesalahan',
                    'B' => 'Saya merasa terganggu jika ada yang tidak menyukai saya',
                ],
                'scoring' => [
                    'A' => 'K',
                    'B' => 'O',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 19,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka membiarkan bila orang lain mengatur saya',
                    'B' => 'Saya suka mencoba pekerjaan-pekerjaan yang baru dan berbeda',
                ],
                'scoring' => [
                    'A' => 'F',
                    'B' => 'Z',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 20,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya menyukai petunjuk-petunjuk terperinci dalam menyelesaikan tugas',
                    'B' => 'Bila saya terganggu oleh siapapun, saya akan memberitahukannya',
                ],
                'scoring' => [
                    'A' => 'W',
                    'B' => 'K',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 21,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya selalu bekerja “keras”',
                    'B' => 'Saya suka melaksanakan setiap langkah dengan teliti',
                ],
                'scoring' => [
                    'A' => 'G',
                    'B' => 'D',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 22,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya akan menjadi seorang pemimpin yang baik',
                    'B' => 'Saya dapat mengorganisir suatu pekerjaan dengan baik',
                ],
                'scoring' => [
                    'A' => 'L',
                    'B' => 'C',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 23,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya mudah tersinggung',
                    'B' => 'Saya lambay dalam membuat keputusan',
                ],
                'scoring' => [
                    'A' => 'I',
                    'B' => 'E',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 24,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka mengerjakan beberapa pekerjaan sekaligus',
                    'B' => 'Bila saya berada dalam suatu kelompok saya suka berdiam diri',
                ],
                'scoring' => [
                    'A' => 'X',
                    'B' => 'N',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 25,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya senang bila diundang',
                    'B' => 'Saya ingin lebih baik dari yang lain dalam mengerjakan sesuatu',
                ],
                'scoring' => [
                    'A' => 'B',
                    'B' => 'A',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 26,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka berteman secara intim',
                    'B' => 'Saya suka menasehati orang lain',
                ],
                'scoring' => [
                    'A' => 'O',
                    'B' => 'P',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 27,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka melakukan hal-hal yang baru dan berbeda',
                    'B' => 'Saya suka menceritakan bagaimana saya berhasil melakukan sesuatu',
                ],
                'scoring' => [
                    'A' => 'Z',
                    'B' => 'X',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 28,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Bila saya benar, saya suka mempertahankannya',
                    'B' => 'Saya ingin diterima dan diakui dalam suatu kelompok',
                ],
                'scoring' => [
                    'A' => 'K',
                    'B' => 'B',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 29,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya tidak mau berbeda dengan orang lain',
                    'B' => 'Saya berusaha untuk sangat intim dengan orang lain',
                ],
                'scoring' => [
                    'A' => 'F',
                    'B' => 'O',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 30,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka berteman secara intim',
                    'B' => 'Saya suka menasehati orang lain',
                ],
                'scoring' => [
                    'A' => 'W',
                    'B' => 'Z',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 31,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya bekerja “keras”',
                    'B' => 'Saya banyak berpikir dan berencana',
                ],
                'scoring' => [
                    'A' => 'G',
                    'B' => 'R',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 32,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya memimpin kelompok',
                    'B' => 'Hal-hal kecil (detail) menarik bagi saya',
                ],
                'scoring' => [
                    'A' => 'L',
                    'B' => 'D',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 33,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya dapat mengambil keputusan secara mudah dan tepat',
                    'B' => 'Saya menyimpan barang-barang saya secara rapih dan teratur',
                ],
                'scoring' => [
                    'A' => 'I',
                    'B' => 'D',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 34,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya cepat dalam melaksanakan suatu pekerjaan',
                    'B' => 'Saya tidak sering marah atau sedih',
                ],
                'scoring' => [
                    'A' => 'T',
                    'B' => 'E',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 35,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya ingin menjadi bagian dari kelompok',
                    'B' => 'Saya hanya ingin melakukan satu pekerjaan pada suatu saat',
                ],
                'scoring' => [
                    'A' => 'B',
                    'B' => 'N',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 36,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya berusaha untuk intim dengan teman-teman saya',
                    'B' => 'Saya berusaha keras menjadi yang terbaik',
                ],
                'scoring' => [
                    'A' => 'O',
                    'B' => 'A',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 37,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka mode terbaru untuk pakaian dan mobil',
                    'B' => 'Saya suka bertanggungjawab bagi orang lain',
                ],
                'scoring' => [
                    'A' => 'Z',
                    'B' => 'P',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 38,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya menyukai perdebatan',
                    'B' => 'Saya suka mendapat perhatian',
                ],
                'scoring' => [
                    'A' => 'K',
                    'B' => 'X',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 39,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya senang diatur oleh orang lain',
                    'B' => 'Saya tertarik menjadi bagian dari kelompok',
                ],
                'scoring' => [
                    'A' => 'F',
                    'B' => 'B',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 40,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka mengikuti peraturan dengan hati-hati',
                    'B' => 'Saya suka orang mengenal saya dengan baik',
                ],
                'scoring' => [
                    'A' => 'W',
                    'B' => 'O',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 41,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya bekerja sangat “keras”',
                    'B' => 'Saya mempunyai sifat bersahabat',
                ],
                'scoring' => [
                    'A' => 'G',
                    'B' => 'S',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 42,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Orang lain beranggapan bahwa saya adalah seorang pemimpin yang baik',
                    'B' => 'Saya berpikir panjan dan berhati-hati',
                ],
                'scoring' => [
                    'A' => 'L',
                    'B' => 'R',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 43,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya sering mengambil kesempatan',
                    'B' => 'Saya senang mengurus hal-hal kecil',
                ],
                'scoring' => [
                    'A' => 'I',
                    'B' => 'D',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 44,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Orang berpendapat bahwa saya bekerja cepat',
                    'B' => 'Orang berpendapat bahwa saya rapi dan teratur',
                ],
                'scoring' => [
                    'A' => 'T',
                    'B' => 'C',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 45,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya senang permainan-permainan dan berolahraga',
                    'B' => 'Saya mempunyai pribadi yang menyenangkan',
                ],
                'scoring' => [
                    'A' => 'V',
                    'B' => 'E',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 46,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya senang bila orang lain bersikap intim dan bersahabat',
                    'B' => 'Saya selalu berusaha untuk menyelesaikan sesuatu yang telah saya mulai',
                ],
                'scoring' => [
                    'A' => 'O',
                    'B' => 'N',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 47,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya senang bereksperimen dan mencoba hal-hal baru',
                    'B' => 'Saya suka melaksanakan suatu pekerjaan sulit dengan baik',
                ],
                'scoring' => [
                    'A' => 'Z',
                    'B' => 'A',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 48,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka diperlakukan secara adil',
                    'B' => 'Saya suka memberitahu orang lain bagaimana melaksanakan sesuatu',
                ],
                'scoring' => [
                    'A' => 'K',
                    'B' => 'P',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 49,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka melakukan apa yang diharapkan dari saya',
                    'B' => 'Saya suka menarik perhatian',
                ],
                'scoring' => [
                    'A' => 'F',
                    'B' => 'X',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 50,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka petunjuk-petunjuk terperinci dalam melaksanakan suatu pekerjaan',
                    'B' => 'Saya suka bertemu dengan orang lain',
                ],
                'scoring' => [
                    'A' => 'W',
                    'B' => 'B',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 51,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya selalu berusaha menyelesaikan pekerjaan secara sempurna',
                    'B' => 'Saya menganggap bahwa di dalam bekerja sehari-hari saya tidak mengenal lelah',
                ],
                'scoring' => [
                    'A' => 'G',
                    'B' => 'V',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 52,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya adalah tipe seorang pemimpin',
                    'B' => 'Saya mudah berteman',
                ],
                'scoring' => [
                    'A' => 'L',
                    'B' => 'S',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 53,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya memanfaatkan peluang-peluang yang ada',
                    'B' => 'Saya banyak sekali berpikir',
                ],
                'scoring' => [
                    'A' => 'I',
                    'B' => 'R',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 54,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya bekerja dengan cara-cara yang selalu cepat',
                    'B' => 'Saya senang bekerja dengan hal-hal kecil atau terperinci',
                ],
                'scoring' => [
                    'A' => 'T',
                    'B' => 'D',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 55,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya mempunyai banyak tenaga untuk berolahraga',
                    'B' => 'Saya suka mengatur dan menyimpan barang-barang secara rapi dan teratur',
                ],
                'scoring' => [
                    'A' => 'V',
                    'B' => 'C',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 56,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya dapat bergaul baik dengan semua orang',
                    'B' => 'Saya seorang yang “pandai mengendalikan diri”',
                ],
                'scoring' => [
                    'A' => 'S',
                    'B' => 'E',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 57,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya ingin bertemu dengan orang-orang baru dan melakukan hal-hal baru',
                    'B' => 'Saya selalu ingin menyelesaikan pekerjaan yang telah saya mulai',
                ],
                'scoring' => [
                    'A' => 'Z',
                    'B' => 'N',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 58,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya biasanya mempertahankan pendapat yang saya yakini',
                    'B' => 'Saya biasanya suka bekerja “keras”',
                ],
                'scoring' => [
                    'A' => 'K',
                    'B' => 'A',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 59,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka saran-saran dari orang yang saya kagumi',
                    'B' => 'Saya suka diatur oleh orang lain',
                ],
                'scoring' => [
                    'A' => 'F',
                    'B' => 'P',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 60,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya biarkan diri saya banyak dipengaruhi oleh orang lain',
                    'B' => 'Saya suka jika mendapat banyak perhatian',
                ],
                'scoring' => [
                    'A' => 'W',
                    'B' => 'X',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 61,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Bila saya berbicara kelompok mendengarkan',
                    'B' => 'Saya terampil menggunakan alat-alat kerja',
                ],
                'scoring' => [
                    'A' => 'G',
                    'B' => 'T',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 62,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Bila saya berbicara kelompok mendengarkan',
                    'B' => 'Saya terampil menggunakan alat-alat kerja',
                ],
                'scoring' => [
                    'A' => 'L',
                    'B' => 'V',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 63,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya lambat didalam pergaulan',
                    'B' => 'Saya lambat dalam membuat keputusan',
                ],
                'scoring' => [
                    'A' => 'I',
                    'B' => 'S',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 64,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya biasanya makan secara tepat',
                    'B' => 'Saya suka membaca',
                ],
                'scoring' => [
                    'A' => 'T',
                    'B' => 'R',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 65,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka ganti-ganti pekerjaan',
                    'B' => 'Saya suka pekerjaan yang dilakukan dengan hati-hati',
                ],
                'scoring' => [
                    'A' => 'V',
                    'B' => 'D',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 66,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya berteman sebanyak mungkin',
                    'B' => 'Saya dapat menemukan kembali apa yang telah saya simpan',
                ],
                'scoring' => [
                    'A' => 'S',
                    'B' => 'C',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 67,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya merencanakan jauh-jauh sebelumnya',
                    'B' => 'Saya selalu menyenangkan',
                ],
                'scoring' => [
                    'A' => 'R',
                    'B' => 'E',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 68,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya mempertahankan dengan bangga nama baik saya',
                    'B' => 'Saya terus menekuni suatu masalah sampai selesai',
                ],
                'scoring' => [
                    'A' => 'K',
                    'B' => 'N',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 69,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya tunduk kepada orang-orang yang saya kagumi',
                    'B' => 'Saya ingin sukses',
                ],
                'scoring' => [
                    'A' => 'F',
                    'B' => 'A',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 70,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka orang-orang lain yang membuat keputusan-keputusan kelompok',
                    'B' => 'Saya suka membuat keputusan-keputusan untuk kelompok',
                ],
                'scoring' => [
                    'A' => 'W',
                    'B' => 'P',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 71,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya selalu bekerja “keras”',
                    'B' => 'Saya mengambil keputusan secara cepat dan mudah',
                ],
                'scoring' => [
                    'A' => 'G',
                    'B' => 'I',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 72,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Kelompok biasanya melakukan apa yang saya inginkan',
                    'B' => 'Saya biasanya bekerja cepat',
                ],
                'scoring' => [
                    'A' => 'L',
                    'B' => 'T',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 73,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya sering merasa lelah',
                    'B' => 'Saya lambat dalam mengambil keputusan',
                ],
                'scoring' => [
                    'A' => 'I',
                    'B' => 'V',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 74,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya bekerja cepat',
                    'B' => 'Saya mudah berteman',
                ],
                'scoring' => [
                    'A' => 'T',
                    'B' => 'S',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 75,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya biasanya mempunyai gairah dan tenaga',
                    'B' => 'Saya banyak menghabiskan waktu dengan berpikir',
                ],
                'scoring' => [
                    'A' => 'V',
                    'B' => 'R',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 76,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya ramah terhadap orang',
                    'B' => 'Saya suka pekerjaan yang memerlukan ketelitian',
                ],
                'scoring' => [
                    'A' => 'S',
                    'B' => 'D',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 77,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya banyak berpikir dan berencana',
                    'B' => 'Saya suka pekerjaan yang memerlukan ketelitian',
                ],
                'scoring' => [
                    'A' => 'R',
                    'B' => 'C',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 78,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka pekerjaan yang menuntut hal-hal terperinci',
                    'B' => 'Saya tidak mudah marah',
                ],
                'scoring' => [
                    'A' => 'D',
                    'B' => 'E',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 79,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka mengikuti orang-orang yang saya kagumi',
                    'B' => 'Saya selalu menyelesaikan pekerjaan yang telah saya mulai',
                ],
                'scoring' => [
                    'A' => 'F',
                    'B' => 'N',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 80,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka petunjuk-petunjuk yang jelas',
                    'B' => 'Saya suka bekerja “keras”',
                ],
                'scoring' => [
                    'A' => 'W',
                    'B' => 'A',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 81,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya mengejar apa yang saya inginkan',
                    'B' => 'Saya seorang pemimpin yang baik',
                ],
                'scoring' => [
                    'A' => 'G',
                    'B' => 'L',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 82,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya dapat membuat orang lain bekerja keras',
                    'B' => 'Saya adalah orang yang “senang hura-hura”',
                ],
                'scoring' => [
                    'A' => 'L',
                    'B' => 'I',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 83,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya mengambil keputusan secara cepat',
                    'B' => 'Saya berbicara dengan cepat',
                ],
                'scoring' => [
                    'A' => 'I',
                    'B' => 'T',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 84,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya biasanya bekerja cepat',
                    'B' => 'Saya berolahraga secara teratur',
                ],
                'scoring' => [
                    'A' => 'T',
                    'B' => 'V',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 85,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya tidak suka bertemu dengan orang lain',
                    'B' => 'Saya cepat merasa lelah',
                ],
                'scoring' => [
                    'A' => 'S',
                    'B' => 'V',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 86,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya mempunyai banyak sekali teman',
                    'B' => 'Saya banyak menghabiskan waktu dengan berpikir',
                ],
                'scoring' => [
                    'A' => 'S',
                    'B' => 'R',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 87,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka bekerja dengan teori',
                    'B' => 'Saya suka bekerja dengan hal-hal terperinci',
                ],
                'scoring' => [
                    'A' => 'R',
                    'B' => 'D',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 88,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka bekerja dengan hal-hal terperinci',
                    'B' => 'Saya suka mengorganisir pekerjaan saya',
                ],
                'scoring' => [
                    'A' => 'D',
                    'B' => 'C',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 89,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya menaruh barang pada tempatnya',
                    'B' => 'Saya selalu menyenangkan',
                ],
                'scoring' => [
                    'A' => 'C',
                    'B' => 'E',
                ],
            ],
            [
                'psikotes_section_id' => $papiKostick->sections[0]->id,
                'order' => 90,
                'type' => 'multiple_choice',
                'options' => [
                    'A' => 'Saya suka diberitahu tentang apa yang perlu saya lakukan',
                    'B' => 'Saya harus menyelesaikan apa yang saya mulai',
                ],
                'scoring' => [
                    'A' => 'W',
                    'B' => 'N',
                ],
            ],

        ];

        foreach ($questions as $question) {
            PsikotesQuestion::create($question);
        }
    }
}
