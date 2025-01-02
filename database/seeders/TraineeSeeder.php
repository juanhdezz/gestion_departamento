<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trainee;


class TraineeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainee = new Trainee();
        $trainee->dni = '87654321Z';
        $trainee->name = 'Trainee';
        $trainee->email = 'trainee@example.com';
        $trainee->login = 'trainee';
        $trainee->password = bcrypt('trainee');
        $trainee->office = 'A-123';
        $trainee->current_category = 'Trainee';
        $trainee->total_days = 30;
        $trainee->current_responsible = 'Admin';
        $trainee->scholarship_end = '2024-07-25 13:45:00';
        $trainee->teaching_credits_department = 4;
        $trainee->desired_teaching_credits = 6;
        $trainee->save();

        Trainee::factory()->count(10)->create();

    }
}
