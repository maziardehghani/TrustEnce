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
        $team = Team::query()->insert(
            [
                [
                    'name' => 'maziar',
                    'family' => 'dehghani',
                    'created_at' => now(),
                ],
                [
                    'name' => 'ali',
                    'family' => 'ashrafi',
                    'created_at' => now(),
                ]
            ]
        );

    }
}
