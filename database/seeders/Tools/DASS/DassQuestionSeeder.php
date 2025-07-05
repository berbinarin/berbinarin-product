<?php

namespace Database\Seeders\Tools\DASS;

use App\Models\PsikotesQuestion;
use App\Models\PsikotesTool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DassQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dass = PsikotesTool::where('name', 'DASS')->with('sections')->first();

        $questions = [
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 1,
                'type' => 'likert scale',
                'text' => 'Saya merasa bahwa diri saya menjadi marah karena hal-hal sepele.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Depression'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 2,
                'type' => 'likert scale',
                'text' => 'Saya merasa bibir saya sering kering.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Anxiety'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 3,
                'type' => 'likert scale',
                'text' => 'Saya sama sekali tidak dapat merasakan perasaan positif.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Stress'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 4,
                'type' => 'likert scale',
                'text' => 'Saya mengalami kesulitan bernafas (misalnya: seringkali terengah-engah atau tidak dapat bernafas padahal tidak melakukan aktivitas fisik sebelumnya).',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Anxiety'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 5,
                'type' => 'likert scale',
                'text' => 'Saya sepertinya tidak kuat lagi untuk melakukan suatu kegiatan.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Stress'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 6,
                'type' => 'likert scale',
                'text' => 'Saya cenderung bereaksi berlebihan terhadap suatu situasi.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Depression'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 7,
                'type' => 'likert scale',
                'text' => 'Saya merasa goyah (misalnya, kaki terasa mau "copot").',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Anxiety'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 8,
                'type' => 'likert scale',
                'text' => 'Saya merasa sulit untuk bersantai.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Stress'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 9,
                'type' => 'likert scale',
                'text' => 'Saya menemukan diri saya berada dalam situasi yang membuat saya merasa sangat cemas dan saya akan merasa sangat lega jika semua ini berakhir.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Depression'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 10,
                'type' => 'likert scale',
                'text' => 'Saya merasa tidak ada hal yang dapat diharapkan di masa depan.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Stress'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 11,
                'type' => 'likert scale',
                'text' => 'Saya menemukan diri saya mudah merasa kesal.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Depression'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 12,
                'type' => 'likert scale',
                'text' => 'Saya merasa telah menghabiskan banyak energi untuk merasa cemas.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Stress'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 13,
                'type' => 'likert scale',
                'text' => 'Saya merasa sedih dan tertekan.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Depression'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 14,
                'type' => 'likert scale',
                'text' => 'Saya menemukan diri saya menjadi tidak sabar ketika mengalami penundaan (misalnya: kemacetan lalu lintas, menunggu sesuatu).',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Stress'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 15,
                'type' => 'likert scale',
                'text' => 'Saya merasa lemas seperti mau pingsan.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Anxiety'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 16,
                'type' => 'likert scale',
                'text' => 'Saya merasa saya kehilangan minat akan segala hal.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Depression'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 17,
                'type' => 'likert scale',
                'text' => 'Saya merasa bahwa saya tidak berharga sebagai seorang manusia.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Stress'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 18,
                'type' => 'likert scale',
                'text' => 'Saya merasa bahwa saya mudah tersinggung.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Depression'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 19,
                'type' => 'likert scale',
                'text' => 'Saya berkeringat secara berlebihan (misalnya: tangan berkeringat), padahal temperatur tidak panas atau tidak melakukan aktivitas fisik sebelumnya.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Anxiety'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 20,
                'type' => 'likert scale',
                'text' => 'Saya merasa takut tanpa alasan yang jelas.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Anxiety'
                ],
            ],
            [
                'psikotes_section_id' => $dass->sections[0]->id,
                'order' => 21,
                'type' => 'likert scale',
                'text' => 'Saya merasa bahwa hidup tidak bermanfaat.',
                'options' => [
                    'Tidak Pernah',
                    'Kadang-Kadang',
                    'Lumayan Sering',
                    'Sering Sekali',
                ],
                'scoring' => [
                    'skor' => [
                        'Tidak Pernah' => 0,
                        'Kadang-Kadang' => 1,
                        'Lumayan Sering' => 2,
                        'Sering Sekali' => 3,
                    ],
                    'kategori' => 'Stress'
                ],
            ],
        ];

        foreach ($questions as $question) {
            PsikotesQuestion::create($question);
        }
    }
}
