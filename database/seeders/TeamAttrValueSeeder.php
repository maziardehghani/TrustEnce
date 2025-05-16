<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\TeamAttrValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamAttrValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maziar = Team::query()->whereName('maziar')->first();
        $ali = Team::query()->whereName('ali')->first();

        TeamAttrValue::query()->insert([
            [
                'attr_title_id' => 1,
                'team_id' => $maziar->id,
                'value' => 'Backend Developer',
            ],
            [
                'attr_title_id' => 2,
                'team_id' => $maziar->id,
                'value' => fake()->realText(),
            ],
            [
                'attr_title_id' => 3,
                'team_id' => $maziar->id,
                'value' => 'https://www.linkedin.com/in/maziar-dehghani-687092335/',
            ],


            [
                'attr_title_id' => 1,
                'team_id' => $ali->id,
                'value' => 'Frontend Developer',
            ],
            [
                'attr_title_id' => 2,
                'team_id' => $ali->id,
                'value' => fake()->realText(),
            ],
            [
                'attr_title_id' => 3,
                'team_id' => $ali->id,
                'value' => 'https://www.linkedin.com/in/ali-ashrafi-b24943299/',
            ]


        ]);

    }
}
