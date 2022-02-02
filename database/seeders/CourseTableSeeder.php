<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['id'=>1, 'coursename'=>'Php'],
            ['id'=>4, 'coursename'=>'Java'],
            ['id'=>5, 'coursename'=>'JavaScript'],
            ['id'=>6, 'coursename'=>'C'],
        ];
        Course::insert($post);
    }
}
