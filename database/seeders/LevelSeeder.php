<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */ protected $level = [
        [
            'level' => 'Senior',
            'description' => 'test',
        ],
        [
            'level' => 'Junior',
            'description' => 'test',
        ],
        [
            'level' => 'Fresher',
            'description' => 'test',
        ],
        [
            'level' => 'Intern',
            'description' => 'test',
        ]
    ];
    public function run(): void
    {
        foreach ($this->level as $value) {
            Level::create($value);
        };
    }
}
