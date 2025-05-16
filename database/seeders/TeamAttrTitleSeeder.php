<?php

namespace Database\Seeders;

use App\Models\TeamAttrTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamAttrTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamAttrTitle::query()->insert(
            [
                [
                    'title' => 'position',
                    'input_type' => 'string',
                ],
                [
                    'title' => 'bio',
                    'input_type' => 'text',
                ],

                [
                    'title' => 'linkedin',
                    'input_type' => 'string',
                ],

                [
                    'title' => 'twitter',
                    'input_type' => 'string',
                ],

                [
                    'title' => 'github',
                    'input_type' => 'string',
                ],
            ]
        );
    }
}
