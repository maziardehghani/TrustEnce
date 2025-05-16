<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\TeamAttrTitle;
use App\Models\TeamAttrValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team = Team::query()->create([
            'name' => 'maziar',
            'family' => 'dehghani',
        ]);

        $teamAttrTitle = TeamAttrTitle::query()->create([
            'title' => 'position',
            'input_type' => 'string',
        ]);


        $teamAttrValue = TeamAttrValue::query()->create([
            'attr_title_id' => $teamAttrTitle->id,
            'team_id'=> $team->id,
            'value'=> 'software Engineer',
        ]);
    }
}
