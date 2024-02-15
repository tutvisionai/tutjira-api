<?php

namespace Database\Seeders;

use App\Models\JobPlans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobPlansSeeder extends Seeder
{
    const JOB = [
        [
            'description' => 'Estágio',
            'value' => 0.0,
            'time' => '1 SEMANA',
            'note' => 'Conhecendo o sistema e apresentando o que sabe sobre as tecnologias aplicadas na CAJU Tec.',
            'color' => '#66b3ff',
        ],
        [
            'description' => 'Trainne',
            'value' => 500,
            'time' => '1 MÊS',
            'note' => 'Executando protocolos de demandas em projetos relacionados aos nossos produtos.',
            'color' => '#0080ff',
        ],
        [
            'description' => 'JÚNIOR (Tutjira-manso) - Nível 1 Crescimento',
            'value' => 1500,
            'time' => 'INDEFINIDO',
            'note' => '',
            'color' => '#00f500',
        ],
        [
            'description' => 'JÚNIOR (Tutjira-manso) - Nível 2 Maturação',
            'value' => 1750,
            'time' => 'INDEFINIDO',
            'note' => '',
            'color' => '#00d600',
        ],
        [
            'description' => 'JÚNIOR (Tutjira-manso) - Nível 3 Amadurecimento (Líder)',
            'value' => 2000,
            'time' => 'INDEFINIDO',
            'note' => '',
            'color' => '#00a300',
        ],
        [
            'description' => 'PLENO (Tutjira-manteiga) - Nível 1 Crescimento',
            'value' => 2250,
            'time' => 'INDEFINIDO',
            'note' => '',
            'color' => '#f57b00',
        ],
        [
            'description' => 'PLENO (Tutjira-manteiga) - Nível 2 Maturação',
            'value' => 2500,
            'time' => 'INDEFINIDO',
            'note' => '',
            'color' => '#d66c00',
        ],
        [
            'description' => 'PLENO (Tutjira-manteiga) - Nível 3 Amadurecimento (Líder)',
            'value' => 2750,
            'time' => 'INDEFINIDO',
            'note' => '',
            'color' => '#a35200',
        ],
        [
            'description' => 'SÊNIOR (Tutjira) - Nível 1 Crescimento',
            'value' => 3000,
            'time' => 'INDEFINIDO',
            'note' => '',
            'color' => '#f50000',
        ],
        [
            'description' => 'SÊNIOR (Tutjira) - Nível 2 Maturação',
            'value' => 3250,
            'time' => 'INDEFINIDO',
            'note' => '',
            'color' => '#d60000',
        ],
        [
            'description' => 'SÊNIOR (Tutjira) - Nível 3 Amadurecimento (Líder)',
            'value' => 3500,
            'time' => 'INDEFINIDO',
            'note' => '',
            'color' => '#a30000',
        ],
    ];

    public function run()
    {
        //
        foreach (self::JOB as $job) {
            JobPlans::updateOrCreate([
                'description' => $job['description']
            ], [
                'description' => $job['description'],
                'value' => $job['value'],
                'time' => $job['time'],
                'note' => $job['note'],
                'color' => $job['color'],
            ]);
        }
    }
}
