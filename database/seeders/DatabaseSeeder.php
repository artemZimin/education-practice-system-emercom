<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contract;
use App\Models\Department;
use App\Models\Direction;
use App\Models\Faculty;
use App\Models\Organization;
use App\Models\PracticalTraining;
use App\Models\Practice;
use App\Models\PracticeDocuments;
use App\Models\Profile;
use App\Models\ReportingDocuments;
use App\Models\Student;
use App\Models\StudyGroup;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Faculty::factory(20)->create()->each(function ($faculty) {
            // Department::factory(2)->create(['faculty_id' => $faculty->id]);
            StudyGroup::factory(5)->create(['faculty_id' => $faculty->id]);
        });
        Organization::factory(20)->create();
        Contract::factory(100)->create();
        Student::factory(80)->create();
        PracticeDocuments::factory(80)->create();
        Direction::factory(20)->create();
        Teacher::factory(80)->create();
        PracticalTraining::factory(80)->create();
        ReportingDocuments::factory(80)->create();
        Practice::factory(80)->create();
        Profile::factory(20)->create();
    }
}
