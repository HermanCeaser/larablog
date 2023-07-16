<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Programming',
            'Web Development',
            'Mobile App Development',
            'Artificial Intelligence',
            'Machine Learning',
            'Data Science',
            'Cloud Computing',
            'Cybersecurity',
            'Internet of Things (IoT)',
            'Blockchain',
            'Virtual Reality (VR)',
            'Augmented Reality (AR)',
            'Big Data',
            'UI/UX Design',
            'DevOps',
            'Software Engineering',
            'Database Management',
            'Network Security',
            'Cryptocurrency',
            'Robotics',
            'Automation',
            'Digital Marketing',
            'E-commerce',
            'Gaming',
            'Computer Vision',
            'Natural Language Processing',
            'Wireless Technologies',
            'JavaScript',
            'Python',
            'Java',
            'C++',
            'C#',
            'Ruby',
            'Go',
            'Swift',
            'PHP',
            'Rust',
            'TypeScript',
            'Kotlin',
            'Scala',
            'HTML',
            'CSS',
            'SQL',
            'Shell Scripting',
            'Perl',
        ];

        $tagsArray = [];

        foreach ($tags as $tag) {
            $tagsArray[] = [
                'name' => $tag
            ];
        }
        DB::table('tags')->insert($tagsArray);
    }
}
