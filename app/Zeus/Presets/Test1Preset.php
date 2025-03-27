<?php

namespace App\Zeus\Presets;

use LaraZeus\BoltPro\Preset;
use Illuminate\Support\Str;

class Test1Preset extends Preset
{
    public function title(): string
    {
        return __('test');
    }

    public function desc(): string
    {
        return __('test Descriptions');
    }

    public function category(): string
    {
        return '';
    }

    /**
     * @throws \JsonException
     */
    public function definition(): array
    {
        return [
            
                'name' => 'test',
                'slug' => 'test1-LB8BJN',
                'description' => 'test',
                'options' => json_encode([
                    'confirmation-message' => '',
                    'show-as' => 'page',
                    'require-login' => '',
                    'emails-notification' => '',
                ], JSON_THROW_ON_ERROR),
                'user_id' => 2,

                //'category_id' => 1, // optional
                //'start_date' => null, // optional
                //'end_date' => null, // optional

                'ordering' => 2,
                'is_active' => 1,
                'created_at' => '2025-03-27 20:26:42',
            
                        'section' => [
                            
                        [
                            'name' => 'test',
                            'aside' => false,
                            'compact' => false,
                            'columns' => '1',
                    
                        'fields' => [
                            
                                [
                                    'name' => 'test',
                                    'description' => '',
                                    'type' => '\LaraZeus\Bolt\Fields\Classes\TextInput',
                                    'ordering' => 1,
                                    'options' => json_encode([
                                        
                                    'grades' => [
                                        'correct-answer' => '',
                                        'points' => '',
                                        'max-selected-options' => '',
                                        
                                    ],
                                    
                                    'visibility' => [
                                        'active' => '',
                                        'fieldID' => '',
                                        'values' => '',
                                        
                                    ],
                                    'htmlId' => 'VtBkY6',
                                    
                                    'hint' => [
                                        'text' => '',
                                        'icon' => '',
                                        'color' => '',
                                        'icon-tooltip' => '',
                                        
                                    ],
                                    'is_required' => '',
                                    'column_span_full' => '',
                                    'hidden_label' => '',
                                    'dateType' => null,
                                    'minValue' => null,
                                    'maxValue' => null,
                                    'suffix' => null,
                                    'suffix-icon' => null,
                                    'suffix-icon-color' => null,
                                    'prefix' => null,
                                    'prefix-icon' => null,
                                    'prefix-icon-color' => null,
                                    
                                    ], JSON_THROW_ON_ERROR),
                                ],
                            
                        ],
                    ],
                    
            ]
        ];
    }
}

