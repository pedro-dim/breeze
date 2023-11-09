<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Summary of abilitySkills
     * @var array
     */
    public $abilitySkills = [
        'Programming',
        'Problem Solving',
        'Critical Thinking',
        'Communication',
        'Teamwork',
        'Time Management',
        'Adaptability',
        'Creativity',
        'Leadership',
        'Analytical Skills',
        'Attention to Detail',
        'Multitasking',
        'Decision Making',
        'Conflict Resolution',
        'Networking',
        'Negotiation',
        'Research',
        'Presentation',
        'Project Management',
        'Customer Service',
        'Technical Writing',
        'Data Analysis',
        'Sales',
        'Marketing',
        'Foreign Languages',
        'Public Speaking',
        'Emotional Intelligence',
        'Attention Management',
        'Financial Literacy',
        'Strategic Planning',
    ];



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {




        return [
            'skill' => $this->abilitySkills[array_rand($this->abilitySkills)]
        ];
    }
}
