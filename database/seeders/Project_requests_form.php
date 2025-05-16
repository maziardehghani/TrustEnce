<?php

namespace Database\Seeders;

use App\Models\ProjectRequestForm;
use Illuminate\Database\Seeder;

class Project_requests_form extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectRequestForm::query()->insert([

            [
                'input' => 'Full Name',
                'input_type' => 'text',
                'options' => null,
                'is_active' => true,
                'form_page' => 'discovery_session',
                'created_at' => now(),
            ],


            [
                'input' => 'Phone Number',
                'input_type' => 'text',
                'options' => null,
                'is_active' => true,
                'form_page' => 'discovery_session',
                'created_at' => now(),
            ],


            [
                'input' => 'Select Service',
                'input_type' => 'select-box',
                'options' => json_encode(
                    [
                        'normal web site design',
                        'professional web site design',
                        'other'
                    ]

                ),

                'is_active' => true,
                'form_page' => 'discovery_session',
                'created_at' => now(),
            ],


            [
                'input' => 'Budget Range',
                'input_type' => 'select-box',
                'options' => json_encode(
                    [
                        'normal web site design',
                        'professional web site design',
                        'other'
                    ]

                ),

                'is_active' => true,
                'form_page' => 'discovery_session',
                'created_at' => now(),
            ],


            [
                'input' => 'Budget Range',
                'input_type' => 'select-box',
                'options' => json_encode(
                    [
                        '$1000 - $3000',
                        '$3000 - $5000',
                        '$5000+'
                    ],

                ),

                'is_active' => true,
                'form_page' => 'discovery_session',
                'created_at' => now(),
            ],


            [
                'input' => 'Project Brief',
                'input_type' => 'textarea',
                'options' => null,
                'is_active' => true,
                'form_page' => 'discovery_session',
                'created_at' => now(),
            ],


        ]);
    }
}
