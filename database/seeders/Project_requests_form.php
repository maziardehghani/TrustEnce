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
                'input' => 'Full_Name',
                'input_type' => 'text',
                'options' => null,
                'is_active' => true,
                'form_page' => 'service',
                'created_at' => now(),
            ],

            [
                'input' => 'Email',
                'input_type' => 'text',
                'options' => null,
                'is_active' => true,
                'form_page' => 'service',
                'created_at' => now(),
            ],

            [
                'input' => 'Phone_Number',
                'input_type' => 'text',
                'options' => null,
                'is_active' => true,
                'form_page' => 'service',
                'created_at' => now(),
            ],


            [
                'input' => 'Select_Service',
                'input_type' => 'select-box',
                'options' => json_encode(
                    [
                        'normal web site design',
                        'professional web site design',
                        'other'
                    ]

                ),

                'is_active' => true,
                'form_page' => 'service',
                'created_at' => now(),
            ],


            [
                'input' => 'Budget_Range',
                'input_type' => 'select-box',
                'options' => json_encode(
                    [
                        '$1000 - $3000',
                        '$3000 - $5000',
                        '$5000+'
                    ],

                ),

                'is_active' => true,
                'form_page' => 'service',
                'created_at' => now(),
            ],


            [
                'input' => 'Project_Brief',
                'input_type' => 'textarea',
                'options' => null,
                'is_active' => true,
                'form_page' => 'service',
                'created_at' => now(),
            ],

            [
                'input' => 'Full_Name',
                'input_type' => 'text',
                'options' => null,
                'is_active' => true,
                'form_page' => 'get_in_touch',
                'created_at' => now(),
            ],

            [
                'input' => 'Email',
                'input_type' => 'text',
                'options' => null,
                'is_active' => true,
                'form_page' => 'get_in_touch',
                'created_at' => now(),
            ],

            [
                'input' => 'Inquiry',
                'input_type' => 'textarea',
                'options' => null,
                'is_active' => true,
                'form_page' => 'get_in_touch',
                'created_at' => now(),
            ],


            [
                'input' => 'Terms_conditions',
                'input_type' => 'checkbox',
                'options' => null,
                'is_active' => true,
                'form_page' => 'get_in_touch',
                'created_at' => now(),
            ],


            [
                'input' => 'Email',
                'input_type' => 'text',
                'options' => null,
                'is_active' => true,
                'form_page' => 'footer',
                'created_at' => now(),
            ],

            [
                'input' => 'Full_Name',
                'input_type' => 'text',
                'options' => null,
                'is_active' => true,
                'form_page' => 'discovery_section',
                'created_at' => now(),
            ],


            [
                'input' => 'Email',
                'input_type' => 'text',
                'options' => null,
                'is_active' => true,
                'form_page' => 'discovery_section',
                'created_at' => now(),
            ],

            [
                'input' => 'Phone_Number',
                'input_type' => 'text',
                'options' => null,
                'is_active' => true,
                'form_page' => 'discovery_section',
                'created_at' => now(),
            ],

            [
                'input' => 'Inquiry',
                'input_type' => 'textarea',
                'options' => null,
                'is_active' => true,
                'form_page' => 'discovery_section',
                'created_at' => now(),
            ],

        ]);
    }
}
